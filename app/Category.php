<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	protected $table='categorys';
    protected $fillable=['name','description','status'];
	
	
	public function productos(){
			
			return $this->hasMany(App\productos);
			
		}
		
		public function views(){
				
				return $this->belongsToMany(App\views);
				
			}
}
