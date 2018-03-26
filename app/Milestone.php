<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    public function projects(){
    	return $this->belongsTo('App\Project');
    }
    public function images(){
    	return $this->hasOne('App\Image');
    }
}
