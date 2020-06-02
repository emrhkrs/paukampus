<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table ="departments";
    protected $guarded =[];


    public function faculty(){
        return $this->belongsTo('App\Models\Faculty' ,'faculty_id');
    }
    public function lectures()
    {
        return $this->belongsToMany('App\Models\Lectures', 'lecture_departments','department_id','lecture_id');
    }

}
