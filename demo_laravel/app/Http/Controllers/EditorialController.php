<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function index()
    {
        return view('editorial/index');
    }

    public function create()
    {
        return view('editorial/create');
    }

    public function edit($id)
    {
        return view('editorial/edit', ['id' => $id, 'nombre' => 'Xavier Canjura', 'edad' => 14]);
    }
}
