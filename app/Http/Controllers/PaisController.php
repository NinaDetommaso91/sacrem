<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pais;
use App\estado;


class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paiss=pais::orderBy('id','DESC')->paginate(3);
        return view('pais.index',compact('paiss')); 
    }

    

    


       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pais.create');
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
        pais::create($request->all());
        return redirect()->route('pais.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paiss=pais::find($id);
        return  view('pais.show',compact('paiss'));
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
        $pais=pais::find($id);
        return view('pais.edit',compact('pais'));
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

        pais::find($id)->update($request->all());
        return redirect()->route('pais.index')->with('success','Registro actualizado satisfactoriamente');

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
         pais::find($id)->delete();
        return redirect()->route('pais.index')->with('success','Registro eliminado satisfactoriamente');
    }

    public function getEstados(Request $request, $id){
        if ($request->ajax()){
            $estados=Estado::estados($id);
        return response()->json($estados);

         }


         
    }
}