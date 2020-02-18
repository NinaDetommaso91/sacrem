<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nivel;


class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $niveles=nivel::orderBy('id','DESC')->paginate(3);
        return view('nivel.index',compact('niveles')); 
    }

    

    


       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nivel.create');
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
        $this->validate($request,[ 'nombre'=>'required']);
        nivel::create($request->all());
        return redirect()->route('nivel.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $niveles=Nivel::find($id);
        return  view('nivel.show',compact('niveles'));
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
        $nivel=nivel::find($id);
        return view('nivel.edit',compact('niveles'));
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

        nivel::find($id)->update($request->all());
        return redirect()->route('nivel.index')->with('success','Registro actualizado satisfactoriamente');

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
         nivel::find($id)->delete();
        return redirect()->route('nivel.index')->with('success','Registro eliminado satisfactoriamente');
    }

  

         
    
}