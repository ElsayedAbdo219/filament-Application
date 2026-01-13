<?php

namespace App\Filament\Resources\TeamSkillPercentages\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

class TeamSkillPercentageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('skill_name')->label('Skill Name')->sortable()->required()->searchable(),
                Textarea::make('percentage')->label('Percentage')->sortable()->number()->required()->searchable(),
            ]);
    }
}
