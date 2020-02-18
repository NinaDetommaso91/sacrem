<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\user;
use App\Estadocivil;
use App\Municipio;
use App\Sangre;
use App\Nacionalidad;
use App\pais;
use App\Banco;
use App\datosp;
use App\Datosp_nacionalidade;
use App\Model_has_Roles;


class DatosPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $f=dd(auth()->user()->nacionalidad()); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


     $estadocivils = Estadocivil::pluck('nombre','id');
     $municipios = Municipio::pluck('nombre','id');
    
    $sangres = Sangre::pluck('nombre','id');
   $nacionalidades=Nacionalidad::all();

     $paises = pais::pluck('nombre','id');
     $bancos = Banco::pluck('banco','id');

    return view('DatosP.create', compact('estadocivils','municipios','sangres','nacionalidades','paises','bancos'));        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

public function store( Request $request ) {
    $datosp            = new datosp();
    $datosp->cedula    = $request->input( 'cedula' );
    $datosp->pasaporte = $request->input( 'pasaporte' );
    $datosp->nombre    = $request->input( 'nombre' );
    $datosp->apellido  = $request->input( 'apellido' );
    $datosp->sexo      = $request->input( 'sexo' );
    $datosp->sangre    = $request->input( 'sangre' );
    $datosp->fechanac  = $request->input( 'fechanac' );
    $datosp->paisnac   = $request->input( 'paisnac' );
    $datosp->estacivil = $request->input( 'estacivil' );
    $datosp->tel       = $request->input( 'tel' );
    $datosp->telc      = $request->input( 'telc' );
    $datosp->municipio = $request->input( 'municipio' );
    $datosp->direccion = $request->input( 'direccion' );
    $datosp->banco     = $request->input( 'banco' );
    $datosp->numcta    = $request->input( 'numcta' );
    $datosp->tallac    = $request->input( 'tallac' );
    $datosp->tallap    = $request->input( 'tallap' );
    $datosp->tallaz    = $request->input( 'tallaz' );
    $datosp->nombree   = $request->input( 'nombree' );
    $datosp->apellidoe = $request->input( 'apellidoe' );
    $datosp->tele      = $request->input( 'tele' );
    $datosp->telce     = $request->input( 'telce' );
    $datosp->save(); 

    $datospID = $datosp->id;
   
    $tot_nac = $request->input( 'nacionalidades_id' );
    $tot_nac_num = count($tot_nac); //eso fue lo q agregue

    for ( $i = 0; $i < $tot_nac_num; $i ++ ):
        $datosp_nac                    = new Datosp_nacionalidade();
      
        $datosp_nac->nacionalidades_id = $request->input( 'nacionalidades_id' )[$i];
        $datosp_nac->datosp_id         = $datospID;
     $datosp_nac->save();
    endfor;

  return 'guardado';

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
