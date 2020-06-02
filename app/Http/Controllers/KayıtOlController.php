<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KayıtOlController extends Controller
{
    public function index()
    {
        return view('kayıt-ol');
    }
}
