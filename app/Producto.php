<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';
	protected $fillable=['name','description','price','url_img','category_id','status'];
	
	
	public function categorys(){
				
				return $this->belongsTo(App\Category);
				
			}
}
