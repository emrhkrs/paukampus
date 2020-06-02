<?php

namespace App\Http\Controllers;

use App\Models\Lectures;
use App\Models\Notes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerView()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $email = $request->email;
        if (strpos($email, '@posta.pau.edu.tr') === false)
        {
            return redirect()->back()
                ->with('message', 'Geçersiz E-posta.')
                ->with('status', 'danger');
        }

        $validate = $this->validate($request, [
            'name' => 'required|min:3|max:60',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6|same:password_confirmation',
        ]);

        $kullanici = User::create([
            'name' => $request->name ,
            'surname' =>$request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($kullanici);
        return redirect()->route('anasayfa');

    }

    public function loginView()
    {
        return view('login');
    }
    public function login()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt(['email' => request('email'), 'password' => request('password')], request()->has('benihatirla')))
        {
            request()->session()->regenerate();
            return redirect()->intended('/');
        } else {
            $errors = ['email' => 'Hatalı Giriş'];
            return back()->withErrors($errors);
        }

    }
    public function logout()
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('anasayfa');
    }





}
