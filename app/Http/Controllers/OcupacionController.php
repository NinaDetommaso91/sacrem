<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Ocupacion;

class OcupacionController extends Controller
{
      public function index()
    {
        //
        $ocupacions=ocupacion::orderBy('id','ocupacion')->paginate(3);
        return view('ocupacion.index',compact('ocupacions')); 
    }

    

    


       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ocupacion.create');
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
        ocupacion::create($request->all());
        return redirect()->route('ocupacion.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ocupacions=ocupacion::find($id);
        return  view('ocupacion.show',compact('ocupacions'));
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
        $ocupacion=ocupacion::find($id);
        return view('ocupacion.edit',compact('ocupacion'));
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

        ocupacion::find($id)->update($request->all());
        return redirect()->route('ocupacion.index')->with('success','Registro actualizado satisfactoriamente');

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
         ocupacion::find($id)->delete();
        return redirect()->route('ocupacion.index')->with('success','Registro eliminado satisfactoriamente');
    }

    public function getEstados(Request $request, $id){
        if ($request->ajax()){
            $estados=Estado::estados($id);
        return response()->json($estados);

         }


         
    }
//
}
