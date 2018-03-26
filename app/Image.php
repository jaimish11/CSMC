<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function milestones(){
    	return $this->belongsTo('App\Milestone');
    }
}
