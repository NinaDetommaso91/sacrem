<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
class CursodatoisController extends Controller
{
   public function index(){


   }

   public function create(){
   $Curs=Curso::pluck('curso','id');

   return view ('DatosCursos.create',compact('Curs'));
   }


   public function store( Request $request ){

 Curso::create($request->all());

   }//
}
