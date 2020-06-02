<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Notes;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $searchNotes = Notes::where('title', 'like', "%$search%")->orWhere('description','like', "%$search%")->get();
        $searchBooks = Books::where('title', 'like', "%$search%")->orWhere('description','like', "%$search%")->get();
        return view('search-result', compact('searchNotes','searchBooks'));


    }
}
