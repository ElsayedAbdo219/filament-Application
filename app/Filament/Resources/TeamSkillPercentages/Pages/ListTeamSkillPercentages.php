<?php

namespace App\Filament\Resources\TeamSkillPercentages\Pages;

use App\Filament\Resources\TeamSkillPercentages\TeamSkillPercentageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTeamSkillPercentages extends ListRecords
{
    protected static string $resource = TeamSkillPercentageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
