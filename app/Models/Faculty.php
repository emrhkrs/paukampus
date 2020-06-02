<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table ='faculty';
    protected $guarded =[];

    public function departments(){
        return $this ->hasMany('App\Models\Department','faculty_id');
    }
}


//
