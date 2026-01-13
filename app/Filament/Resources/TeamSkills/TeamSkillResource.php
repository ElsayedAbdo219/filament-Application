<?php

namespace App\Filament\Resources\TeamSkills;

use App\Filament\Resources\TeamSkills\Pages\CreateTeamSkill;
use App\Filament\Resources\TeamSkills\Pages\EditTeamSkill;
use App\Filament\Resources\TeamSkills\Pages\ListTeamSkills;
use App\Filament\Resources\TeamSkills\Schemas\TeamSkillForm;
use App\Filament\Resources\TeamSkills\Tables\TeamSkillsTable;
use App\Models\TeamSkill;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeamSkillResource extends Resource
{
    protected static ?string $model = TeamSkill::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TeamSkillForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeamSkillsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTeamSkills::route('/'),
            'create' => CreateTeamSkill::route('/create'),
            'edit' => EditTeamSkill::route('/{record}/edit'),
        ];
    }
}
