<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacionProductoDestino extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'producto_id',
        'destino_id'
      
    ];

    public function producto(){
        return $this->hasMany("App\Producto");
    }
    public function destino(){
        return $this->hasMany("App\destino");
    }
}
