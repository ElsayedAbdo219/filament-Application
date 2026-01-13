<?php

namespace App\Filament\Resources\TeamPeople\Pages;

use App\Filament\Resources\TeamPeople\TeamPersonResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeamPerson extends EditRecord
{
    protected static string $resource = TeamPersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
