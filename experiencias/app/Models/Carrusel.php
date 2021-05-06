<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrusel extends Model
{
  
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'descripcion',
        'urlfoto',
        'link',
        'orden',
        'title',
        'title2',
        'title3',
        'descripcion2',
        'descripcion3',
        'link2',
        'link3',
        'urlfoto1',
        'urlfoto2',
        'urlfoto3',
        'encabezado',
        'subencabezado'
 
    ];
}
