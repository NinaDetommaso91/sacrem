<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pais;
use App\estado;

class OfficesController extends Controller
{

	public function index()
{
        //
     
        return view('offices.create'); 
}



    public function create()
{
    abort_unless(\Gate::allows('office_create'), 401);
    $paises = pais::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

    return view('admin.offices.create', compact('paises'));
}//
}
