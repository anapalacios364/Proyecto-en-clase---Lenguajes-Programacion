<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    use HasFactory;

    //$fillable: evitamos asignacion masiva.
    protected $fillable =[
        'nombre',
        'descripcion',
    ];
}
