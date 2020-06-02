<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table ="books";
    protected $guarded =[];

    public function lectures(){
        return $this ->belongsTo('App\Models\Lectures', 'lecture_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function files(){
        return $this->hasMany('App\Models\Files','book_id');
    }

}
