<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function milestones(){
    	return $this->hasMany('App\Milestone');
    }
}
