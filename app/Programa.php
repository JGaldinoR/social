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
}
