<?php

namespace App\Filament\Resources\Ventas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use App\Models\Cliente;
use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\Categorias;

class VentasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('cliente_id')
                    ->label('Cliente')
                    ->relationship('cliente', 'nombre')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('producto_id')
                    ->label('Producto')
                    ->relationship('producto', 'nombre_producto')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('proveedor_id')
                    ->label('Proveedor')
                    ->relationship('proveedor', 'nombre_proveedor')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('categoria_id')
                    ->label('Categoria')
                    ->relationship('categoria', 'nombre_categoria')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }
}
