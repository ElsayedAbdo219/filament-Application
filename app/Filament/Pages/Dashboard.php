<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Page;

class Dashboard extends Page
{
    public function getWidgets(): array
    {
        return [
            // \App\Livewire\MyWidget::class,
            // \App\Filament\Widgets\PostsChart::class,
        ];
    }
}
