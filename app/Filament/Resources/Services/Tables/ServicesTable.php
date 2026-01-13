<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description')->label('Description')->sortable()->searchable(),
                TextColumn::make('secondary_title')->label('Secondary Title')->sortable()->searchable(),
                TextColumn::make('secondary_title_description')->label('Secondary Description')->sortable()->searchable(),
                ImageColumn::make('icon')->label('Icon')->sortable()->searchable(), 
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
