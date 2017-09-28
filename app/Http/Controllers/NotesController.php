<?php

namespace App\Http\Controllers;

use App\Note;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
    	$notes = Note::all();

    	return  view('notes/list',compact('notes'));

    }

    public function create()
    {
    	return view('notes/create');
    }

    public function store()
    {
    	return 'Creating a note ahora en modo prueba';
    }

    public function show($note)
    {
    	dd($note);
    }
}
