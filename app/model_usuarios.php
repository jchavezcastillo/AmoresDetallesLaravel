<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_usuarios extends Model
{
    protected $table = 'usuarios';
	 protected $fillable=['nombre','password','status','tipo'];
	
	
}
