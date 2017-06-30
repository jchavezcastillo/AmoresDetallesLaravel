<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('visitors.home');
});

Route::get('/admin', function () {
    return view('visitors.home');
});


Route::group(['prefix' => 'visitante'], function()
{	
	/*MISIÓN VISIÓN*/
	Route::get( 'Misión-y-valores', [ 'as' => 'visitors.mision-valores', 'uses' => 'Visitors\VisitorsViewsController@getMisionValores' ] );
	/*EVENTOS ESPECIALES*/
	Route::get( 'bodas', [ 'as' => 'visitors.bodas', 'uses' => 'Visitors\VisitorsViewsController@getBodas' ] );
	Route::get( 'aniversarios', [ 'as' => 'visitors.aniversarios', 'uses' => 'Visitors\VisitorsViewsController@getAniversarios' ] );
	Route::get( 'despedidas', [ 'as' => 'visitors.despedidadesolteras', 'uses' => 'Visitors\VisitorsViewsController@getDespedidas' ] );
	Route::get( 'xv', [ 'as' => 'visitors.quinceanios', 'uses' => 'Visitors\VisitorsViewsController@getXVanios' ] );
	Route::get( 'baby-shower', [ 'as' => 'visitors.babyshower', 'uses' => 'Visitors\VisitorsViewsController@getBabyShower' ] );
	Route::get( 'bautizos', [ 'as' => 'visitors.bautizos', 'uses' => 'Visitors\VisitorsViewsController@getBautizos' ] );
	Route::get( 'confirmación', [ 'as' => 'visitors.confirmacion', 'uses' => 'Visitors\VisitorsViewsController@getConfirmacion' ] );
	Route::get( 'primera-comunión', [ 'as' => 'visitors.primeracomunion', 'uses' => 'Visitors\VisitorsViewsController@getPrimeraComunion' ] );
	Route::get( 'graduaciones', [ 'as' => 'visitors.graduaciones', 'uses' => 'Visitors\VisitorsViewsController@getGraduaciones' ] );
	Route::get( 'cumpleaños', [ 'as' => 'visitors.cumpleanos', 'uses' => 'Visitors\VisitorsViewsController@getCumpleanos' ] );
	/*REGALOS*/
	Route::get( 'niña', [ 'as' => 'visitors.nina', 'uses' => 'Visitors\VisitorsViewsController@getNina' ] );
	Route::get( 'niño', [ 'as' => 'visitors.nino', 'uses' => 'Visitors\VisitorsViewsController@getNino' ] );
	Route::get( 'ella', [ 'as' => 'visitors.ella', 'uses' => 'Visitors\VisitorsViewsController@getElla' ] );
	Route::get( 'el', [ 'as' => 'visitors.el', 'uses' => 'Visitors\VisitorsViewsController@getEl' ] );
	Route::get( 'hogar', [ 'as' => 'visitors.hogar', 'uses' => 'Visitors\VisitorsViewsController@getHogar' ] );
	Route::get( 'oficina', [ 'as' => 'visitors.oficina', 'uses' => 'Visitors\VisitorsViewsController@getOficina' ] );
	Route::get( 'escuela', [ 'as' => 'visitors.escuela', 'uses' => 'Visitors\VisitorsViewsController@getEscuela' ] );
	Route::get( 'galería', [ 'as' => 'visitors.galeria', 'uses' => 'Visitors\VisitorsViewsController@getGaleria' ] );
	/*INFORMACIÓN*/
	Route::get( 'eventos', [ 'as' => 'visitors.eventos', 'uses' => 'Visitors\VisitorsViewsController@getEventos' ] );
	Route::get( 'medios', [ 'as' => 'visitors.medios', 'uses' => 'Visitors\VisitorsViewsController@getMedios' ] );
	Route::get( 'amores-detalles', [ 'as' => 'visitors.amoresdetalles', 'uses' => 'Visitors\VisitorsViewsController@getAmoresDetalles' ] );
	Route::get( 'colaboraciones', [ 'as' => 'visitors.colaboraciones', 'uses' => 'Visitors\VisitorsViewsController@getColaboraciones' ] );
	Route::get( 'presenciales', [ 'as' => 'visitors.presenciales', 'uses' => 'Visitors\VisitorsViewsController@getPresenciales' ] );
	Route::get( 'online', [ 'as' => 'visitors.online', 'uses' => 'Visitors\VisitorsViewsController@getOnline' ] );
	Route::get( 'taller-colaboraciones', [ 'as' => 'visitors.tallercolaboraciones', 'uses' => 'Visitors\VisitorsViewsController@getTallerColaboraciones' ] );
	/*CONTACTO*/
	Route::get( 'contacto', [ 'as' => 'visitors.contacto', 'uses' => 'Visitors\VisitorsViewsController@getContacto' ] );
	/* LOGIN  */
	Route::get( 'login', [ 'as' => 'login', 'uses' => 'CustomAuth\AuthController@getLogin' ] );//obtener vista
	Route::post( 'login', [ 'as' => 'visitors.login', 'uses' => 'CustomAuth\AuthController@postLogin' ] );
	/*home*/
	Route::get( 'home', [ 'as' => 'visitors.home', 'uses' => 'Visitors\VisitorsViewsController@getHome' ] );
	Route::get( 'home', [ 'as' => 'visitors.home', 'uses' => 'Visitors\VisitorsViewsController@getHome' ] );
	Route::get( 'session', [ 'as' => 'session', 'uses' => 'CustomAuth\AuthController@getSession' ] );
	 
	
	
	
	
});

Route::group(['prefix' => 'admin'], function()
{	
	/*MISIÓN VISIÓN*/
	Route::get( 'Misión-y-valores', [ 'as' => 'admin.mision-valores', 'uses' => 'admin\AdminUpdateController@getMisionValores' ] );
	/*EVENTOS ESPECIALES*/
	Route::get( 'bodas', [ 'as' => 'admin.bodas', 'uses' => 'admin\AdminUpdateController@getBodas' ] );
	
	Route::get( 'aniversarios', [ 'as' => 'admin.aniversarios', 'uses' => 'admin\AdminUpdateController@getAniversarios' ] );
	Route::get( 'despedidas', [ 'as' => 'admin.despedidadesolteras', 'uses' => 'admin\AdminUpdateController@getDespedidas' ] );
	Route::get( 'xv', [ 'as' => 'admin.quinceanios', 'uses' => 'admin\AdminUpdateController@getXVanios' ] );
	Route::get( 'baby-shower', [ 'as' => 'admin.babyshower', 'uses' => 'admin\AdminUpdateController@getBabyShower' ] );
	Route::get( 'bautizos', [ 'as' => 'admin.bautizos', 'uses' => 'admin\AdminUpdateController@getBautizos' ] );
	Route::get( 'confirmación', [ 'as' => 'admin.confirmacion', 'uses' => 'admin\AdminUpdateController@getConfirmacion' ] );
	Route::get( 'primera-comunión', [ 'as' => 'admin.primeracomunion', 'uses' => 'admin\AdminUpdateController@getPrimeraComunion' ] );
	Route::get( 'graduaciones', [ 'as' => 'admin.graduaciones', 'uses' => 'admin\AdminUpdateController@getGraduaciones' ] );
	Route::get( 'cumpleaños', [ 'as' => 'admin.cumpleanos', 'uses' => 'admin\AdminUpdateController@getCumpleanos' ] );
	/*REGALOS*/
	Route::get( 'niña', [ 'as' => 'admin.nina', 'uses' => 'admin\AdminUpdateController@getNina' ] );
	Route::get( 'niño', [ 'as' => 'admin.nino', 'uses' => 'admin\AdminUpdateController@getNino' ] );
	Route::get( 'ella', [ 'as' => 'admin.ella', 'uses' => 'admin\AdminUpdateController@getElla' ] );
	Route::get( 'el', [ 'as' => 'admin.el', 'uses' => 'admin\AdminUpdateController@getEl' ] );
	Route::get( 'hogar', [ 'as' => 'admin.hogar', 'uses' => 'admin\AdminUpdateController@getHogar' ] );
	Route::get( 'oficina', [ 'as' => 'admin.oficina', 'uses' => 'admin\AdminUpdateController@getOficina' ] );
	Route::get( 'escuela', [ 'as' => 'admin.escuela', 'uses' => 'admin\AdminUpdateController@getEscuela' ] );
	Route::get( 'galería', [ 'as' => 'admin.galeria', 'uses' => 'admin\AdminUpdateController@getGaleria' ] );
	/*INFORMACIÓN*/
	Route::get( 'eventos', [ 'as' => 'admin.eventos', 'uses' => 'admin\AdminUpdateController@getEventos' ] );
	Route::get( 'medios', [ 'as' => 'admin.medios', 'uses' => 'admin\AdminUpdateController@getMedios' ] );
	Route::get( 'amores-detalles', [ 'as' => 'admin.amoresdetalles', 'uses' => 'admin\AdminUpdateController@getAmoresDetalles' ] );
	Route::get( 'colaboraciones', [ 'as' => 'admin.colaboraciones', 'uses' => 'admin\AdminUpdateController@getColaboraciones' ] );
	Route::get( 'presenciales', [ 'as' => 'admin.presenciales', 'uses' => 'admin\AdminUpdateController@getPresenciales' ] );
	Route::get( 'online', [ 'as' => 'admin.online', 'uses' => 'admin\AdminUpdateController@getOnline' ] );
	Route::get( 'taller-colaboraciones', [ 'as' => 'admin.tallercolaboraciones', 'uses' => 'admin\AdminUpdateController@getTallerColaboraciones' ] );
	/*CONTACTO*/
	Route::get( 'contacto', [ 'as' => 'admin.contacto', 'uses' => 'admin\AdminUpdateController@getContacto' ] );
	/* home  */
	Route::get( 'home', [ 'as' => 'admin.home', 'uses' => 'admin\AdminUpdateController@getHome']);
	/*Fin de sesion */
	 Route::get( 'logout/{user_id}', [ 'as' => 'logout', 'uses' => 'CustomAuth\AuthController@getLogout' ] );
	 
	 Route::post( 'envio', [ 'as' => 'envio', 'uses' => 'Register\RegisterCRUDController@CreateRegisterPartners']);
	 
	 /*  insercion de productos   */
	 
	 Route::post( 'products', [ 'as' => 'admin.products', 'uses' => 'admin\adminProductCRUDController@store' ] );
	 
	
});
