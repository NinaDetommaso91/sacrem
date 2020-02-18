<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estado;
use App\Pais;
use Illuminate\Support\Facades\DB;


class EstadoController extends Controller
{

   public function index(){


 $estados=DB::table('estados')
            ->join('paises', 'estados.paises_id', '=', 'paises.id')
            
            ->select('estados.*', 'paises.nombre', 'estados.nombre As x')
            ->orderBy('paises.id','ASC')->paginate(10);

                  return view('estado.index',compact('estados'));


        }
  
 
 
    public function create()

    {        
 $paises=pais::pluck('nombre','id');
        return view('estado.create',compact('paises'));
    }

 public function store(Request $request)
    {
        //
        $this->validate($request,[ 'nombre'=>'required','paises_id'=>'required']);
        estado::create($request->all());
        return redirect()->route('estado.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estados=Estado::find($id);
        return view('estado.show',compact('estados'));
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
        $paises=Pais::pluck('nombre','id');
        $estado=estado::find($id);
     
        return view('estado.edit')->with('estado', $estado)->with('Pais', $paises);
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
        $this->validate($request,[ 'nombre'=>'required','paises_id'=>'required']);

        estado::find($id)->update($request->all());
        return redirect()->route('estado.index')->with('success','Registro actualizado satisfactoriamente');

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
         estado::find($id)->delete();
        return redirect()->route('estado.index')->with('success','Registro eliminado satisfactoriamente');
    }

    //
}
    