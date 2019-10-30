<?php

namespace App;

use App\Proyecto;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $fillable = ['nombre', 'correo', 'formacionAcademica', 'fechaDeNacimiento', 'fechaDeContratacion', 'area', 'proyecto_id'];

    protected $dates = [
        'fechaDeNacimiento', 'fechaDeContratacion'
    ];

    public function proyecto()
    {
       return $this->belongsTo(Proyecto::class);
    }
}
