<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
   protected $table='contacto';
  protected $fillable=['adress','phone','email','schedule','url_maps'];
}
