<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $fillable = ['nombre', 'correo', 'formacionAcademica', 'fechaDeNacimiento', 'fechaDeContratacion', 'area'];

    protected $dates = [
        'fechaDeNacimiento', 'fechaDeContratacion'
    ];
}
