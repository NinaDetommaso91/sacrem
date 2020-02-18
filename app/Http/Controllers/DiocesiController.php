<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estado;
use App\Diocesi;

class DiocesiController extends Controller
{

   public function index(){

   $diocesis=Diocesi::orderBy('id','DESC')->paginate(10);
        return view('Diocesis.index',compact('diocesis')); 


   }
    public function create()

    {        
             
             $estados = estado::pluck('nombre','id');
        return view('diocesis.create',compact('estados'));
    }

 public function store(Request $request)
    {
        //
        $this->validate($request,[ 'nombre'=>'required','estado_id'=>'required']);
        diocesi::create($request->all());
        return redirect()->route('diocesis.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diocesis=Diocesi::find($id);
        return view('diocesis.show',compact('diocesis'));
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
        $estados=Estado::pluck('nombre','id');
           $diocesis=Diocesi::find($id);
        return view('diocesis.edit',compact('diocesis'));
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

        diocesi::find($id)->update($request->all());
        return redirect()->route('diocesis.index')->with('success','Registro actualizado satisfactoriamente');

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
         Diocesi::find($id)->delete();
        return redirect()->route('diocesis.index')->with('success','Registro eliminado satisfactoriamente');
    }

    //
}
