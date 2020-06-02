<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
    protected $table ="lectures";
    protected $guarded =[];

    public function notes(){
        return $this->hasMany('App\Models\Notes', 'lecture_id');
    }

    public function books(){
        return $this->hasMany('App\Models\Books', 'lecture_id');
    }

    public function departments(){
        return $this->belongsToMany('App\Models\Department', 'lecture_departments', 'lecture_id', 'department_id');
    }
}
