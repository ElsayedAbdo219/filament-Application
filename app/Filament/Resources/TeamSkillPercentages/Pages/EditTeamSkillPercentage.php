<?php

namespace App\Filament\Resources\TeamSkillPercentages\Pages;

use App\Filament\Resources\TeamSkillPercentages\TeamSkillPercentageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeamSkillPercentage extends EditRecord
{
    protected static string $resource = TeamSkillPercentageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
