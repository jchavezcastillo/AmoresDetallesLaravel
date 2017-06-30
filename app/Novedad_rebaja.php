<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad_rebaja extends Model
{
    protected $table='novedades_rebajas';
	protected $fillable=['url_img','type','description','status','url_redirect'];
}
