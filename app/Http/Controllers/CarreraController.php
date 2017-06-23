<?php

namespace App\Http\Controllers;

use App\Carrera;
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
        //dd($carreras);

        return view('carrera.indexCarrera',compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carrera.formCarrera');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carrera::create($request->input());
        /*
        $carrera = new Carrera();
        $carrera->carrera = $request->input('carrera');
        $carrera->save();

        <a href="{{ action('CarreraController@create') }}" class = "btn btn-success">Nueva Carrera</a>

        
        action('CarreraController@index');



        */

        return redirect()->route('carrera.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {

        return view('carrera.showCarrera',compact('carrera'));
        //->with('carrera',$carrera)
        //$valores['valor1'] = $valor1;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera)
    {
        return view('carrera.formCarrera',compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrera $carrera)
    {
        $carrera->carrera = $request->input('carrera');

        $carrera->save();

        return redirect()->route('carrera.show', $carrera->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();

        return redirect()->route('carrera.index');
    }
}
