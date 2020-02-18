<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    //PHP
public function index()
{
    $notes = \App\Note::all();

    return view('menus.index', compact('notes'));
}
}
