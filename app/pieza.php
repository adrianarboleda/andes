<?php

namespace App;

use App\Proveedor;
use Illuminate\Database\Eloquent\Model;

class pieza extends Model
{
    protected $fillable = ['nombre'];
    
    public function proveedors(){
        return $this->belongsToMany(Proveedor::class);
    }
    
}
