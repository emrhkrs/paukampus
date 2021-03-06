<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $table ="notes";
    protected $guarded =[];

    public function lectures(){
        return $this ->belongsTo('App\Models\Lectures', 'lecture_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function files(){
        return $this->hasMany('App\Models\Files','note_id');
    }
    public function teacher(){
        return $this->belongsTo('App\Models\Teachers', 'teacher_id');
    }
}
