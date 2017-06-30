<?php

namespace App\Http\Controllers\Visitors;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon as DateFormatter;

class VisitorsViewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*public function __construct()
    {
        $this->dashboard_help = new DashboardHelp();
        $this->middleware('role:emm');
    }*/

    /*Inicio*/
    public function getHome()
    {
        $datos = array();
        return view('visitors.home', compact('datos'));
    }

    /*Misón y visión*/
    public function getMisionValores()
    {
        $datos = array();
        return view('visitors.mision-valores', compact('datos'));
    }
    
    public function getBodas()
    {
        $datos = array();
        return view('visitors.bodas', compact('datos'));
    }

    public function getAniversarios()
    {
        $datos = array();
        return view('visitors.aniversarios', compact('datos'));
    }

    public function getDespedidas()
    {
        $datos = array();
        return view('visitors.despedidas', compact('datos'));
    }

    public function getXVanios()
    {
        $datos = array();
        return view('visitors.quinceanios', compact('datos'));
    }

    public function getBabyShower()
    {
        $datos = array();
        return view('visitors.babyshower', compact('datos'));
    }

    public function getBautizos()
    {
        $datos = array();
        return view('visitors.bautizos', compact('datos'));
    }

    public function getConfirmacion()
    {
        $datos = array();
        return view('visitors.confirmacion', compact('datos'));
    }

    public function getPrimeraComunion()
    {
        $datos = array();
        return view('visitors.primeracomunion', compact('datos'));
    }

    public function getGraduaciones()
    {
        $datos = array();
        return view('visitors.graduaciones', compact('datos'));
    }

    public function getCumpleanos()
    {
        $datos = array();
        return view('visitors.cumpleanos', compact('datos'));
    }

    public function getNina()
    {
        $datos = array();
        return view('visitors.nina', compact('datos'));
    }

    public function getNino()
    {
        $datos = array();
        return view('visitors.nino', compact('datos'));
    }

    public function getElla()
    {
        $datos = array();
        return view('visitors.ella', compact('datos'));
    }

    public function getEl()
    {
        $datos = array();
        return view('visitors.el', compact('datos'));
    }

    public function getHogar()
    {
        $datos = array();
        return view('visitors.hogar', compact('datos'));
    }

    public function getOficina()
    {
        $datos = array();
        return view('visitors.oficina', compact('datos'));
    }

    public function getEscuela()
    {
        $datos = array();
        return view('visitors.escuela', compact('datos'));
    }

    public function getGaleria()
    {
        $datos = array();
        return view('visitors.galeria', compact('datos'));
    }
    /*INFORMACIÓN*/
    public function getEventos()
    {
        $datos = array();
        return view('visitors.eventos', compact('datos'));
    }

    public function getMedios()
    {
        $datos = array();
        return view('visitors.medios', compact('datos'));
    }

    public function getAmoresDetalles()
    {
        $datos = array();
        return view('visitors.amoresdetalles', compact('datos'));
    }

    public function getColaboraciones()
    {
        $datos = array();
        return view('visitors.colaboraciones', compact('datos'));
    }

    public function getPresenciales()
    {
        $datos = array();
        return view('visitors.presenciales', compact('datos'));
    }

    public function getOnline()
    {
        $datos = array();
        return view('visitors.online', compact('datos'));
    }

    public function getTallerColaboraciones()
    {
        $datos = array();
        return view('visitors.talleres-colaboracion', compact('datos'));
    }

    public function getContacto()
    {
        $datos = array();
        return view('visitors.contacto', compact('datos'));
    }
	
	
    public function getLogin()
    {
        $datos = array();
        return view('visitors.login', compact('datos'));
    }

}