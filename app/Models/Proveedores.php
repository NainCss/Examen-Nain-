<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ventas;

class Proveedores extends Model
{
    protected $fillable = [
        'nombre_proveedor',
        'correo',
        'sucursal',
        'telefono',
    ];

    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
    /** @use HasFactory<\Database\Factories\ProveedoresFactory> */
    use HasFactory;
}
