<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales = Editorial::all();
        return view('editorial.index', ['editoriales' => $editoriales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_editorial' => ['required', 'regex:/^EDI[0-9]{3}$/'],
            'nombre_editorial' => 'required',
            'contacto' => 'required',
            'telefono' => ['required', 'regex:/^[267][0-9]{3}-?[0-9]{4}$/'],
        ]);

        $editorial = new Editorial;

        $editorial->codigo_editorial = $request->codigo_editorial;
        $editorial->nombre_editorial = $request->nombre_editorial;
        $editorial->contacto = $request->contacto;
        $editorial->telefono = $request->telefono;

        $editorial->save();
        
        return redirect()->route('editorial.index')->with('status', 'Editorial creado correctamente');
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
        $editorial = Editorial::find($id);
        return view('editorial.edit', compact('editorial'));
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
        $request->validate([
            'codigo_editorial' => ['required', 'regex:/^EDI[0-9]{3}$/'],
            'nombre_editorial' => 'required',
            'contacto' => 'required',
            'telefono' => ['required', 'regex:/^[267][0-9]{3}-?[0-9]{4}$/'],
        ]);

        $editorial = Editorial::findOrFail($id);

        $editorial->codigo_editorial = $request->codigo_editorial;
        $editorial->nombre_editorial = $request->nombre_editorial;
        $editorial->contacto = $request->contacto;
        $editorial->telefono = $request->telefono;

        $editorial->save();
        return redirect()->route('editorial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Editorial::destroy($id);
        return redirect()->route('editorial.index');

    }
}
