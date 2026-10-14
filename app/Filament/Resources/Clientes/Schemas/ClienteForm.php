<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('apellido')
                    ->required(),
                TextInput::make('num_identidad')
                    ->required(),
                TextInput::make('correo')
                    ->required(),
                TextInput::make('direccion')
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->required(),
            ]);
    }
}
