<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts() {
    	// return $this->belongsToMany('App\Post', 'name_of_table');
    	return $this->belongsToMany('App\Post');
    }


}
