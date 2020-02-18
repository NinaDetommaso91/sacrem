<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ocupacion;
use App\Tipovehiculo;
use App\DatosEc; 

class DatosEcController extends Controller
{
  




 public function index()
    {
        return view('DatosEc.index'); //
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tv=tipovehiculo::pluck('vehiculo','id');
     $ocu=Ocupacion::pluck('ocupacion','id');

   return view('DatosEc.create',compact('tv','ocu'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $datoe            = new DatosEc();
    $datoe->cedula    = $request->input( 'cedula' );
    $datoe->ocupacion = $request->input( 'ocupacion' );
    $datoe->pdep  = $request->input( 'pdep' );
    $datoe->ingresom      = $request->input( 'ingresom' );
    $datoe->vehiculo    = $request->input( 'vehiculo' );
    $datoe->condicionesVe	  = $request->input( 'condicionesVe' );
    $datoe->vivienda   = $request->input( 'vivienda' );
    $datoe->condicionesVi = $request->input( 'condicionesVi' );
    $datoe->save();
return  $request; exit;


       
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
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
    public function update(Request $request, $id)    {
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