<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function rescate( Request $request ) {
  
    $id->id    = $request->( 'id' );

  


     public function index(Request $request) 
    {
        //
        $id=$request->( 'id' );;
        return view('menus.menu',compact('id')); 
    }
}
