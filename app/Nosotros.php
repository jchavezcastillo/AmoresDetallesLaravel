<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nosotros extends Model
{
    protected $table='nosotros';
	protected $fillable=['name','url_img','img_description','update_date','status'];
}
