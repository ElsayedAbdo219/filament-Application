<?php

namespace App\Filament\Resources\TeamPeople\Pages;

use App\Filament\Resources\TeamPeople\TeamPersonResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTeamPeople extends ListRecords
{
    protected static string $resource = TeamPersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
