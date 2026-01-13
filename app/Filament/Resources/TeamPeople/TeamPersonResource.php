<?php

namespace App\Filament\Resources\TeamPeople;

use App\Filament\Resources\TeamPeople\Pages\CreateTeamPerson;
use App\Filament\Resources\TeamPeople\Pages\EditTeamPerson;
use App\Filament\Resources\TeamPeople\Pages\ListTeamPeople;
use App\Filament\Resources\TeamPeople\Schemas\TeamPersonForm;
use App\Filament\Resources\TeamPeople\Tables\TeamPeopleTable;
use App\Models\TeamPerson;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeamPersonResource extends Resource
{
    protected static ?string $model = TeamPerson::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'icon';

    public static function form(Schema $schema): Schema
    {
        return TeamPersonForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeamPeopleTable::configure($table);
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
            'index' => ListTeamPeople::route('/'),
            'create' => CreateTeamPerson::route('/create'),
            'edit' => EditTeamPerson::route('/{record}/edit'),
        ];
    }
}
