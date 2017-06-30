<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon as DateFormatter;

class AdminUpdateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	
	
	
    public function __construct()
    {
        //$this->middleware('role:partner',['except' => ['getPartners']]);
        $this->middleware('role:partner'/*,['except' => ['getMyProfile']]*/);
    }
	 

    /*Inicio*/
    public function getHome()
    {
        $datos = array();
        return view('admin.home', compact('datos'));
    }

    /*Misón y visión*/
    public function getMisionValores()
    {
        $datos = array();
        return view('admin.mision-valores', compact('datos'));
    }
    
    public function getBodas()
    {
        $datos = array();
        return view('admin.bodas', compact('datos'));
    }

    public function getAniversarios()
    {
        $datos = array();
        return view('admin.aniversarios', compact('datos'));
    }

    public function getDespedidas()
    {
        $datos = array();
        return view('admin.despedidas', compact('datos'));
    }

    public function getXVanios()
    {
        $datos = array();
        return view('admin.quinceanios', compact('datos'));
    }

    public function getBabyShower()
    {
        $datos = array();
        return view('admin.babyshower', compact('datos'));
    }

    public function getBautizos()
    {
        $datos = array();
        return view('admin.bautizos', compact('datos'));
    }

    public function getConfirmacion()
    {
        $datos = array();
        return view('admin.confirmacion', compact('datos'));
    }

    public function getPrimeraComunion()
    {
        $datos = array();
        return view('admin.primeracomunion', compact('datos'));
    }

    public function getGraduaciones()
    {
        $datos = array();
        return view('admin.graduaciones', compact('datos'));
    }

    public function getCumpleanos()
    {
        $datos = array();
        return view('admin.cumpleanos', compact('datos'));
    }

    public function getNina()
    {
        $datos = array();
        return view('admin.nina', compact('datos'));
    }

    public function getNino()
    {
        $datos = array();
        return view('admin.nino', compact('datos'));
    }

    public function getElla()
    {
        $datos = array();
        return view('admin.ella', compact('datos'));
    }

    public function getEl()
    {
        $datos = array();
        return view('admin.el', compact('datos'));
    }

    public function getHogar()
    {
        $datos = array();
        return view('admin.hogar', compact('datos'));
    }

    public function getOficina()
    {
        $datos = array();
        return view('admin.oficina', compact('datos'));
    }

    public function getEscuela()
    {
        $datos = array();
        return view('admin.escuela', compact('datos'));
    }

    public function getGaleria()
    {
        $datos = array();
        return view('admin.galeria', compact('datos'));
    }
    /*INFORMACIÓN*/
    public function getEventos()
    {
        $datos = array();
        return view('admin.eventos', compact('datos'));
    }

    public function getMedios()
    {
        $datos = array();
        return view('admin.medios', compact('datos'));
    }

    public function getAmoresDetalles()
    {
        $datos = array();
        return view('admin.amoresdetalles', compact('datos'));
    }

    public function getColaboraciones()
    {
        $datos = array();
        return view('admin.colaboraciones', compact('datos'));
    }

    public function getPresenciales()
    {
        $datos = array();
        return view('admin.presenciales', compact('datos'));
    }

    public function getOnline()
    {
        $datos = array();
        return view('admin.online', compact('datos'));
    }

    public function getTallerColaboraciones()
    {
        $datos = array();
        return view('admin.talleres-colaboracion', compact('datos'));
    }

    public function getContacto()
    {
        $datos = array();
        return view('admin.contacto', compact('datos'));
    }

}