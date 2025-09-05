<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected string $view = 'filament.pages.dashboard';
    public function getWidgets(): array
    {
        return [
            \App\Livewire\MyWidget::class, // الـ Widget اللي انت عملته
        ];
    }
}
