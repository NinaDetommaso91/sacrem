<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatosI;
use App\Curso;

class DatosIController extends Controller
{
    //




 public function index()
    {
        return view('DatosI.index'); //
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {  


        $Curs=Curso::pluck('curso','id'); 

     return view('DatosI.create',compact('Curs'));

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
    
        //
       $datoi             = new DatosI();
    $datoi->cedula        = $request->input( 'cedula' );
    $datoi->FechaIng      = $request->input( 'FechaIng' );
    $datoi->CodCarnet     = $request->input( 'CodCarnet' );
    $datoi->ungido        = $request->input( 'ungido' );
    $datoi->Fechaung      = $request->input( 'Fechaung' );
    $datoi->Lugar         = $request->input( 'Lugar' );
    $datoi->estaof        = $request->input( 'estaof' );
    $datoi->Observaciones = $request->input( 'Observaciones' );
    $datoi->save();
return  $request; exit;



   // $datoiID = $datoi->id;
   
   // $tot_nac = $request->input( 'nacionalidades_id' );
   //  $tot_nac_num = count($tot_nac); //eso fue lo q agregue

   //  for ( $i = 0; $i < $tot_nac_num; $i ++ ):
   //      $datosp_nac                    = new Datosp_nacionalidade();
      
   //      $datosp_nac->nacionalidades_id = $request->input( 'nacionalidades_id' )[$i];
   //      $datosp_nac->datosp_id         = $datospID;
   //   $datosp_nac->save();
   //  endfor;


       
    
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