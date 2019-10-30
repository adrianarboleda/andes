<?php

namespace App;

use App\Empleado;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $fillable = ['nombre', 'fechaFinal'];
    protected $dates = [
        'fechaFinal'
    ];
    public function empleado()
    {
        return $this->hasMany('App\Empleado');
    }
}
