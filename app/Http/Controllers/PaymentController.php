<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Notes;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payCost(Request $request){

//        if (empty())
////
//        $request->session()->put('price', $request->price);
//        $request->session()->put('description', $request->description);
//        $request->session()->put('noteId', $request->id);

        //dd($request->all());
        if (!empty($request->noteId)){
            $note=Notes::find($request->noteId);
            return view('paycost',compact('note'));
        }
        else{
            $book=Books::find($request->bookId);
            return view('paycost',compact('book'));
        }




    }
}
