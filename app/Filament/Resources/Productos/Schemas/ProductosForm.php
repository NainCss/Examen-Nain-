<?php

namespace App\Filament\Resources\Productos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_producto')
                    ->required(),
                TextInput::make('descripcion')
                    ->required(),
                TextInput::make('precio')
                    ->required()
                    ->numeric(),
                TextInput::make('tipo_producto')
                    ->required(),
            ]);
    }
}
