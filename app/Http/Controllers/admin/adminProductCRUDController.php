<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class adminProductCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
		
		$data=input::all();
		
		
		Log::info("data::");
		Log::info($data);
		Log::info("request");
       
		
				
		DB::beginTransaction();
		
		try{
			
			$producto=new producto();
			$name= $producto->name=$data['name'];
			$description= $producto->description=$data['description'];
			$price= $producto->price=$data['price'];
			$url_img= $producto->url_img=$data['url_img'];
			$category_id= $producto->category_id=$data['category_id'];
			$producto->save();
			
			/*Validamosn que el nombre exista y que por lo menos tenga 2 caracteres*/
			if(!isset($name) || strlen($name) < 2){
				
				return response()->json(array(
                    'msg' => 'El nombre no esta definido o mide menos de 2 caracteres',
                )); 
			}
			
		
			
			if(!isset($description)||strlen($description)<4 ){
				
				return response()->json(array(
                    'msg' => 'La descripcion no esta definida o mide menos de 4 caracteres',
                )); 
				
			}
			
			
			if(!isset($price)||!is_float($price)){
				
				return response()->json(array(
                    'msg' => 'El precio no esta definido o no es un double',
                )); 
				
				
			}
			
				
			
			if(!isset($url_img)){
				return response()->json(array(
                    'msg' => 'La url no esta definida',
                ));
				
				
			}
			
			
			if(!isset($category_id)||!is_int($category_id)){
				
				return response()->json(array(
                    'msg' => 'El id de la categoria no esta definido o no es un entero',
                ));
				
			}
			
			
		
		
			DB::commit();
			Log::info("registro exitoso");
			
			
			
		}catch(\Exception $e){
			 DB::rollback();
			
			Log::info("se ha hecho roll back debido a excepcion");
			Log::info("errores de validacion");
			throw $e;
			
		}
		
		
		
				
		
		$datos = array();
        return response()->json(array(
            "success" => false,
			"title" => "Aviso",
			"msg" => "Hubo un error",
			"ejemplo" => $data
        ));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
