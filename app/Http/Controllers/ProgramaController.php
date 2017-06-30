<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rol = null)
    {
        //carga la relacion con usuarios
        //$programas = Programa::all()->load('users');

        //$programas = Programa::where('id', 2)->get();

        //$programas = Programa::where('nombre', 'Finanzas')->get();

        //$programas = Programa::where('nombre', '!=', 'Finanzas')->get();

        //$programas = Programa::where('nombre', '!=', 'Finanzas')
        //->where('horario','9-6')->get();

        //$programas = Programa::whereIn('nombre',['Finanzas','CTA'])
        //->with('users')
        //->get();

        if(isset($rol))
        {
            $programas = Programa::Rol($rol)
        ->get();


        }
        else
        {
            $programas = Programa::all()->load('users');
        }
        

        

        //$programas = Programa::whereHas('users',function($query){
         //   $query->where('rol','Admin');
          //  $query->where('nombre','jorge');
        //})
        //->get();




        return view('programas.indexPrograma', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        //
    }
}
