<?php

namespace App\Filament\Resources\PortfolioCategoryImages;

use App\Filament\Resources\PortfolioCategoryImages\Pages\CreatePortfolioCategoryImage;
use App\Filament\Resources\PortfolioCategoryImages\Pages\EditPortfolioCategoryImage;
use App\Filament\Resources\PortfolioCategoryImages\Pages\ListPortfolioCategoryImages;
use App\Filament\Resources\PortfolioCategoryImages\Schemas\PortfolioCategoryImageForm;
use App\Filament\Resources\PortfolioCategoryImages\Tables\PortfolioCategoryImagesTable;
use App\Models\PortfolioCategoryImage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PortfolioCategoryImageResource extends Resource
{
    protected static ?string $model = PortfolioCategoryImage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PortfolioCategoryImageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortfolioCategoryImagesTable::configure($table);
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
            'index' => ListPortfolioCategoryImages::route('/'),
            'create' => CreatePortfolioCategoryImage::route('/create'),
            'edit' => EditPortfolioCategoryImage::route('/{record}/edit'),
        ];
    }
}
