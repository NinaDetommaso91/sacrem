<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nacionalidad;
use App\Pais;

class NacionalidadController extends Controller
{

   public function index(){

   $nacionalidades=Nacionalidad::orderBy('id','DESC')->paginate(3);
        return view('Nacionalidad.index',compact('nacionalidades')); 


   }
    public function create()

    {        
             
             $paises = Pais::pluck('nombre','id');
        return view('nacionalidad.create',compact('paises'));
    }

 public function store(Request $request)
    {
        //
        $this->validate($request,[ 'nombre'=>'required']);
        nacionalidad::create($request->all());
        return redirect()->route('nacionalidad.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nacionalidades=Nacionalidad::find($id);
        return view('nacionalidad.show',compact('nacionalidades'));
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
    $nacionalidad=nacionalidad::find($id);
        return view('nacionalidad.edit',compact('nacionalidad'));
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
        $this->validate($request,[ 'nombre'=>'required']);

        nacionalidad::find($id)->update($request->all());
        return redirect()->route('nacionalidad.index')->with('success','Registro actualizado satisfactoriamente');

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
         nacionalidad::find($id)->delete();
        return redirect()->route('nacionalidad.index')->with('success','Registro eliminado satisfactoriamente');
    }

    //
}
