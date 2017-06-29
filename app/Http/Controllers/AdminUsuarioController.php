<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUsuarioController extends Controller
{
    public function asociarPrograma(Request $request)
    {
    	
    	$user = User::find($request->input('user_id'));
    	$user->programas()->attach($request->input('programa_id'));

    	return redirect()->route('usuario.show', $request->input('user_id'));
    }

}
