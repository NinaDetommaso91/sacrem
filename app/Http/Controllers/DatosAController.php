<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidad;
use App\Idioma;
use App\Nivelint;
use App\DatosA;
use App\Datos_as_idioma;



class DatosAController extends Controller
{
       public function create()
    {

	$idiomas =Idioma::all();
    $espec   =Especialidad::pluck('especialidad','id');
    $Nivelint = Nivelint::pluck('nivel','id');
     

    return view('DatosA.create', compact('idiomas','espec','Nivelint'));        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

public function store( Request $request ) {
    $datosa          = new DatosA();
    $datosa->cedula    = $request->input( 'cedula' );
    $datosa->nivel = $request->input( 'nivel' );
    $datosa->especialidad    = $request->input( 'especialidad' );
    $datosa->Curtal      = $request->input( 'Curtal' );
    $datosa->habilidades      = $request->input( 'habilidades' );
  
    $datosa->save(); 

    $datosaID = $datosa->id;
   
    $tot_nac = $request->input( 'idiomas_id' );
    $tot_nac_num = count($tot_nac);

    for ( $i = 0; $i < $tot_nac_num; $i ++ ):
        $dati                   = new Datos_as_idioma();
      
        $dati->idiomas_id = $request->input( 'idiomas_id' )[$i];
        $dati->datos_as_id     = $datosaID;
     $dati->save(); 
    endfor;

  return  'guardado'; exit; 

}
//
}
