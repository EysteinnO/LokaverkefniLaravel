<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
	//Bráðabirgða validation
    protected $fillable = ['title', 'description'];	
}
