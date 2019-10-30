<?php

namespace App;

use App\Pieza;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $fillable = ['nombre', 'pieza_id'];

    public function piezas(){
        return $this->belongsToMany(Pieza::class);
    }
}
