<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Diocesi;
use App\Cargo;
use App\Cargos_datos_m;
use App\Datos_m_;
 

class Datos_mController extends Controller
{
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


     $dioce = Diocesi::pluck('nombre','id');
     $cargos = Cargo::all();

    

    return view('DatosM.create', compact('dioce','cargos'));        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

public function store( Request $request ) {
    $datos_m                         = new Datos_m_();
    
    $datos_m->cedula=$request->input( 'cedula' );
    $datos_m->nombre   			     = $request->input( 'nombre' ); //diocesis
    $datos_m->mision                 = $request->input( 'mision' ); //tipo mision
    $datos_m->HistorialMisional      = $request->input( 'HistorialMisional');
    $datos_m->observaciones          = $request->input( 'observaciones' );
    $datos_m->FechaAsig	             = $request->input( 'FechaAsig');
   
    $datos_m->save(); 
 
    $datos_m_ID = $datos_m->id;
   
    $toc_car = $request->input( 'cargo_id' ); 
  $toc_car_num = count($toc_car); 

    for ( $i = 0; $i < $toc_car_num; $i ++ ):
       $datos_mcar                    = new Cargos_datos_m();
      
        $datos_mcar->cargo_id = $request->input( 'cargo_id' )[$i];
       $datos_mcar->datos_m_ID        = $datos_m_ID;
    $datos_mcar->save();
     endfor;

  return $request; exit;

//
											}
}
