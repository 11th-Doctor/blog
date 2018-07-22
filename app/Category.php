<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//Tell model called Category the name of table is Categories due to different spelling.  
    protected $table = 'categories';

    public function Post() {
    	return $this->hasMany('App\Post');
    }
}
