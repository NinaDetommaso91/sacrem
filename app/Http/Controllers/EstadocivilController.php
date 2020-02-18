<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estadocivil;

class EstadocivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estadocivils=estadocivil::orderBy('id','DESC')->paginate(3);
        return view('estadocivil.index',compact('estadocivils')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estadocivil.create');
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
        estadocivil::create($request->all());
        return redirect()->route('estadocivil.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadocivils=estadocivil::find($id);
        return  view('estadocivil.show',compact('estadocivils'));
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
        $estadocivil=estadocivil::find($id);
        return view('estadocivil.edit',compact('estadocivil'));
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

        estadocivil::find($id)->update($request->all());
        return redirect()->route('estadocivil.index')->with('success','Registro actualizado satisfactoriamente');

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
         estadocivil::find($id)->delete();
        return redirect()->route('estadocivil.index')->with('success','Registro eliminado satisfactoriamente');
    }
}