<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_tipo_usuario extends Model
{
    protected $table = 'tipos_usuario';
	 protected $fillable=['nombre','status'];
	
	
	
}
