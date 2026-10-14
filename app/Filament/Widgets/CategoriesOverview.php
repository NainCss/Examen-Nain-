<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Categorias;
use App\Models\Ventas;
use App\Models\Cliente;
use App\Models\Productos;

class CategoriesOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total de categorias', Categorias::count())
                ->description('Categorias Restringidas'),

            Stat::make('Categorias Activas', Categorias::where('estado', true)->count())
                ->description('Categorias Activas'),

            Stat::make('Categorias Inactivas', Categorias::where('estado', false)->count())
                ->description('Categorias Inactivas'),

            Stat::make('Total de ventas', Ventas::count())
                ->description('Ventas Registradas'),
            Stat::make('Total de clientes', Cliente::count())
                ->description('Clientes Registrados'),
            Stat::make('Total de productos', Productos::count())
                ->description('Productos Registrados'),
        ];
    }
}
