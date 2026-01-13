<?php

namespace App\Filament\Resources\PortfolioCategoryImages\Pages;

use App\Filament\Resources\PortfolioCategoryImages\PortfolioCategoryImageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioCategoryImages extends ListRecords
{
    protected static string $resource = PortfolioCategoryImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
