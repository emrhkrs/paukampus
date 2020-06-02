<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Lectures;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function showDepartmentLectures($slug){

        $department=Department::where('slug',$slug)->first();
        $lectures=$department->lectures;
        return view('department-lectures',compact('department','lectures'));

    }
}
