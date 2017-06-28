<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsuarioController extends Controller
{
    public function asociarPrograma(Request $request)
    {

    	return redirect()->route('usuario.show', $request->input('user_id'));
    }

}
