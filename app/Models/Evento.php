<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Evento extends Model
{
   

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'eventos';
    protected $primaryKey = 'idEvento';
    public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['Nombre','Descripcion','Lugar','FechaInicio','FechaFin'];
    protected $hidden = ['idEvento','idUsuario'];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
