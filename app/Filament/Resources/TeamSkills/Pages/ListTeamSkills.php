<?php

namespace App\Filament\Resources\TeamSkills\Pages;

use App\Filament\Resources\TeamSkills\TeamSkillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTeamSkills extends ListRecords
{
    protected static string $resource = TeamSkillResource::class;

    protected function getHeaderActions(): array
    {
      if(TeamSkillResource::getModel()::count() >=1){
        return [];
      }
        return [
            CreateAction::make(),
        ];
    }
}
