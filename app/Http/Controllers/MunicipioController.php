<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Estado;
use App\Municipio;
use Illuminate\Support\Facades\DB;


class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$municipios=DB::table('municipios')
            ->join('estados', 'municipios.estado_id', '=', 'estados.id')
            
            ->select('municipios.*', 'estados.nombre', 'municipios.nombre As x')
            ->orderBy('estados.id','ASC')->paginate(10);

                  return view('municipio.index',compact('municipios'));

        return view('municipio.index',compact('municipios'));   
  //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
{
    // abort_unless(\Gate::allows('municipio_create'), 401);
     $estados = estado::pluck('nombre','id');
    return view('municipio.create', compact('estados'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
      $this->validate($request,[ 'nombre'=>'required']);
        Municipio::create($request->all());
        return redirect()->route('municipio.index')->with('success','Registro creado satisfactoriamente');  //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $municipios=Municipio::find($id);
        return view('municipio.show',compact('municipios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipios=Municipio::find($id);
           $estado=estado::pluck('nombre','id');

               return view('municipio.edit',compact('municipios','estado'));
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
          $this->validate($request,[ 'nombre'=>'required','estado_id'=>'required']);

        estado::find($id)->update($request->all());
        return redirect()->route('municipio.index')->with('success','Registro actualizado satisfactoriamente');
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
              municipio::find($id)->delete();
        return redirect()->route('municipio.index')->with('success','Registro eliminado satisfactoriamente');//
    }
}
