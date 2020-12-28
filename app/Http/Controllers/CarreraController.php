<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();
        return view('db.carrera.index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('db.carrera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrera = Carrera::make($request->all());
        $carrera->id_grupo = $request->user()->current_team_id;
        $carrera->save();

        return redirect()->route('carrera.index')->with('success', 'Tercero creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {
        return view('db.carrera.show', ['carrera' => $carrera]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera)
    {
        return view('db.carrera.edit', ['carrera' => $carrera]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrera $carrera)
    {
        /*
        $carrera->first_name = $request->first_name;
        $carrera->middle_name = $request->middle_name;
        $carrera->last_name = $request->last_name;
        $carrera->identification = $request->identification;

        */
        $carrera->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrera $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('carrera.index')->with('success', 'Carrera "'.$carrera->titulo.'" eliminada satisfactoriamente.');
    }
}
