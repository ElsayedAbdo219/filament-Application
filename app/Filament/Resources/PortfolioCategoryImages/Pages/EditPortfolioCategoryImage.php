<?php

namespace App\Filament\Resources\PortfolioCategoryImages\Pages;

use App\Filament\Resources\PortfolioCategoryImages\PortfolioCategoryImageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioCategoryImage extends EditRecord
{
    protected static string $resource = PortfolioCategoryImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
