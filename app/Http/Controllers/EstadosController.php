<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;


class EstadosController extends Controller
{
  public function get_by_pais(Request $request)
{
    abort_unless(\Gate::allows('estado_access'), 401);

    if (!$request->pais_id) {
        $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
    } else {
        $html = '';
        $estados = Estado::where('pais_id', $request->pais_id)->get();
        foreach ($estados as $estado) {
            $html .= '<option value="'.$estado->id.'">'.$estado->nombre.'</option>';
        }
    }

    return response()->json(['html' => $html]);
}  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                return view('create.index'); 
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
