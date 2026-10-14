<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ventas;

class Cliente extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'num_identidad',
        'correo',
        'direccion',
        'telefono',
    ];

    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
    
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;
}
