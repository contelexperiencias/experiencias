<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacionProductoCategoria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'producto_id',
        'categoria_id'
      
    ];
    public function producto(){
        return $this->hasMany("App\producto");
    }
    public function categoria(){
        return $this->hasMany("App\categoria");
    }

}
