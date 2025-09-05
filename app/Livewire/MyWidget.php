<?php

namespace App\Livewire;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MyWidget extends BaseWidget
{
    protected static ?string $heading = 'إحصائيات المنتجات';

    protected function getStats(): array
    {
        return [
            Stat::make('عدد المنتجات', Product::count())
                ->description('إجمالي عدد المنتجات')
                ->icon('heroicon-o-cube'),

            Stat::make('المنتجات المتوفرة', Product::where('stock', '>', 0)->count())
                ->description('متاحة في المخزون')
                ->color('success'),

            Stat::make('المنتجات النافذة', Product::where('stock', 0)->count())
                ->description('خلصت من المخزون')
                ->color('danger'),
        ];
    }
}

