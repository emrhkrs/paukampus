<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{

    public function showFaculties(){
        $faculties=Faculty::all();
        return view('all-faculties',compact('faculties'));
    }

    public function showFacultyDepartments($slug){
        $faculty=Faculty::where('slug',$slug)->first();
        $departments=$faculty->departments;
        return view('faculty-departments',compact('faculty','departments'));

    }
}
