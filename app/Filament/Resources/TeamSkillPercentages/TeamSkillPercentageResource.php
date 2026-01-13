<?php

namespace App\Filament\Resources\TeamSkillPercentages;

use App\Filament\Resources\TeamSkillPercentages\Pages\CreateTeamSkillPercentage;
use App\Filament\Resources\TeamSkillPercentages\Pages\EditTeamSkillPercentage;
use App\Filament\Resources\TeamSkillPercentages\Pages\ListTeamSkillPercentages;
use App\Filament\Resources\TeamSkillPercentages\Schemas\TeamSkillPercentageForm;
use App\Filament\Resources\TeamSkillPercentages\Tables\TeamSkillPercentagesTable;
use App\Models\TeamSkillPercentage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeamSkillPercentageResource extends Resource
{
    protected static ?string $model = TeamSkillPercentage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TeamSkillPercentageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeamSkillPercentagesTable::configure($table);
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
            'index' => ListTeamSkillPercentages::route('/'),
            'create' => CreateTeamSkillPercentage::route('/create'),
            'edit' => EditTeamSkillPercentage::route('/{record}/edit'),
        ];
    }
}
