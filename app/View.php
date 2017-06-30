<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $table='views';
	protected fillable=['name','url_view','status'];
	
	public function categorys(){
				
				return $this->belongsToMany(App\Category);
				
			}
}
