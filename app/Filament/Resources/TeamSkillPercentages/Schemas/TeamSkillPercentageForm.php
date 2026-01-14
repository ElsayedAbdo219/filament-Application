<?php

namespace App\Filament\Resources\TeamSkillPercentages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeamSkillPercentageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('skill_name')
                    ->label('Skill Name')
                    ->required(),

                TextInput::make('percentage')
                    ->label('Percentage')
                    ->numeric()
                    ->required()
                    ->suffix('%')
                    ->minValue(0)
                    ->maxValue(100),

            ]);
    }
}
