<?php

namespace App\Filament\Resources\Proveedores\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProveedoresForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_proveedor')
                    ->required(),
                TextInput::make('correo')
                    ->required(),
                TextInput::make('sucursal')
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->required(),
            ]);
    }
}
