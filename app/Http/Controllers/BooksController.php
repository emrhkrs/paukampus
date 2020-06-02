<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Files;
use App\Models\Lectures;
use App\Models\Notes;
use App\Models\Teachers;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function createBookView()
    {
        $faculties = Faculty::all();
        $departments = Department::all();
        $lectures = Lectures::all();
        $teachers = Teachers::all();
        return view('create-book', compact('faculties', 'departments', 'lectures', 'teachers'));
    }

    public function createBook(Request $request)
    {

        /**
         * @param Request $request
         * @throws ValidationException
         */
        if ($request->hasFile('bookFile')) {
            $this->validate($request, [
                'bookFile' => 'required|mimes:pdf,jpg,png,jpeg|max:4096'
            ]);
        }

        try {
            $book = Books::create([
                'title'         => $request->bookTitle,
                'description'   => $request->bookDescription,
                'price'         => $request->bookPrice,
                'teacher_id'    => $request->teacher_id,
                'lecture_id'    => $request->lecture_id,
                'user_id'       => $request->user_id,
                'department_id' => $request->department_id,
            ]);
            $book_file = $request->file('bookFile');
            $fileName =$book->id . "-".time().".".$book_file->extension();
            if($book_file->isValid()){
                $book_file->move('upload/books',$fileName);
                Files::create([
                    'path'=>$fileName,
                    'book_id'=>$book->id
                ]);
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
