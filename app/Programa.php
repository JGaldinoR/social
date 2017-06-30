<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre','horario'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }


    public function scopeRol($query, $rol)
    {
    	return $query->with(['users' => function($query) use ($rol){
    		$query->where('rol', $rol);
    	}]);

    }


    public function scopeRolPrestador($query)
    {
    	return $query->with(['users' => function($query){
    		$query-where('rol', 'Prestador');
    	}]);

    }
    //use $rol pasar variable de funciones como parametros
}
