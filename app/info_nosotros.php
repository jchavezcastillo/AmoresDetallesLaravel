<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info_nosotros extends Model
{
    protected $table='info_nosotros';
	
	protected $fillable=['title','description','status'];
}
