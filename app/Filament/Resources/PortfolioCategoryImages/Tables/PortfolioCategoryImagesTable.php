<?php

namespace App\Filament\Resources\PortfolioCategoryImages\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Schemas\Components\Image;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class PortfolioCategoryImagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('portfolio_category.name')->label('Portfolio Category')->sortable()->searchable(),
                ImageColumn::make('file_name')->label('Image'),
                ImageColumn::make('icon')->label('Icon'),
                TextColumn::make('title')->label('Title')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Created At')->date()->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
