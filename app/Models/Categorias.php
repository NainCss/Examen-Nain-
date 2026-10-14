<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ventas;

class Categorias extends Model
{
    protected $fillable = [
        'nombre_categoria',
        'estado',
    ];

    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
    /** @use HasFactory<\Database\Factories\CategoriasFactory> */
    use HasFactory;
}
