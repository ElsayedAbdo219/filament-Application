<?php

namespace App\Filament\Resources\TeamSkills\Pages;

use App\Filament\Resources\TeamSkills\TeamSkillResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeamSkill extends EditRecord
{
    protected static string $resource = TeamSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
