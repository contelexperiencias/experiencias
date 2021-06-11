<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'slug',
        'title',
        'description',
        'nombre',
        'descripcion',        
        'urlfoto',
        'visitas',
        'orden',
        'categoria_id',
        'tarifa',
        'familia',
        'pareja',
        'grupo',
        'solo',
        'urlfoto2',
        'urlfoto3',
        'urlfoto4',
        'urlfoto5',
        'detalle'
    ];
    public function categoria(){
        return $this->belongsTo("App\Models\categoria");
    }
}
