<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\Categorias;

class Ventas extends Model
{
    protected $fillable = [
        'cliente_id',
        'producto_id',
        'proveedor_id',
        'categoria_id',
    ];


    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function producto()
    {
        return $this->belongsTo(Productos::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedores::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }

    
    /** @use HasFactory<\Database\Factories\VentasFactory> */
    use HasFactory;
}
