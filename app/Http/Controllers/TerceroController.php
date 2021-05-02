<?php

namespace App\Http\Controllers;

use App\Models\Tercero;
use Illuminate\Http\Request;

class TerceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terceros = Tercero::withTrashed()->get();
        return view('db.tercero.index', compact('terceros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('db.tercero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tercero::create($request->all());

        return redirect()->route('tercero.index')->with('success', 'Tercero creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function show(Tercero $tercero)
    {
        return view('db.tercero.show', ['tercero' => $tercero]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function edit(Tercero $tercero)
    {
        return view('db.tercero.edit', ['tercero' => $tercero]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tercero $tercero)
    {
        $tercero->first_name        = $request->first_name;
        $tercero->middle_name       = $request->middle_name;
        $tercero->last_name         = $request->last_name;
        $tercero->identification    = $request->identification;

        $tercero->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tercero = Tercero::withTrashed()->find($id);

        if($tercero->trashed())
        {
            $tercero->restore();
            return redirect()->route('tercero.index')->with('success', 'Tercero "'.$tercero->primer_nombre.' '.$tercero->primer_apellido.'" reactivado satisfactoriamente.');
        }
        else
        {
            $tercero->delete();
            return redirect()->route('tercero.index')->with('success', 'Tercero "'.$tercero->primer_nombre.' '.$tercero->primer_apellido.'" desactivado satisfactoriamente.');
        }
    }
}
