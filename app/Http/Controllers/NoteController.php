<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\Files;
use App\Models\Lectures;
use App\Models\Notes;
use App\Models\Teachers;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function createNoteView()
    {
        $faculties = Faculty::all();
        $departments = Department::all();
        $lectures = Lectures::all();
        $teachers = Teachers::all();
        return view('create-note', compact('faculties', 'departments', 'lectures', 'teachers'));
    }

    public function createNote(Request $request)
    {
        /**
         * @param Request $request
         * @throws ValidationException
         */
        if ($request->hasFile('noteFile')) {
            $this->validate($request, [
                'noteFile' => 'required|mimes:pdf,jpg,png,jpeg|max:4096'
            ]);
        }

        try {
            $note = Notes::create([
                'title'         => $request->noteTitle,
                'description'   => $request->noteDescription,
                'price'         => $request->notePrice,
                'teacher_id'    => $request->teacher_id,
                'lecture_id'    => $request->lecture_id,
                'user_id'       => $request->user_id,
                'department_id' => $request->department_id,
            ]);
            $note_file = $request->file('noteFile');
            $fileName =$note->id . "-".time().".".$note_file->extension();
            if($note_file->isValid()){
                $note_file->move('upload/notes',$fileName);
                Files::create([
                   'path'=>$fileName,
                   'note_id'=>$note->id
                ]);
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
    public function ara()
    {
        $aranan = request()->input('aranan');
        $notes = Notes::where('title', 'like', "%$aranan%")
            ->orwhere('description','like', "%$aranan%")
            ->get();
        return view('arama',compact('notes'));
    }
}
