<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ventas;

class Productos extends Model
{
    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'precio',
        'tipo_producto',
    ];

    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
    /** @use HasFactory<\Database\Factories\ProductosFactory> */
    use HasFactory;
}
