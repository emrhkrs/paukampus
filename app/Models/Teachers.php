<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table ="teachers";
    protected $guarded =[];


    public function department(){

        return $this->belongsTo('App\Department', 'teacher_id');
//hasmany lecture
    }
}
