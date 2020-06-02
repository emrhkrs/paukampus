<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Lectures;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function showLectureNotes($department_slug,$lecture_slug){

        $department=Department::where('slug',$department_slug)->first();
        $lecture=Lectures::where('slug',$lecture_slug)->first();
        $notes=$lecture->notes->where('department_id',$department->id);
        $books=$lecture->books->where('department_id',$department->id);
        return view('notes',compact('lecture','notes','books'));

    }
}
