<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactsTable
{

    public static function configure(Table $table): Table
    {
      
        return $table
            ->columns([
                TextColumn::make('title')->label('Title'),
                TextColumn::make('description')->label('Description'),
                ImageColumn::make('icon')->label('Icon'),

                TextColumn::make('email')
                    ->label('Email')
                    ->formatStateUsing(fn ($record) => collect($record->email ?? [])
                        ->map(fn ($item) => $item['email'] ?? null)
                        ->filter()
                        ->implode(', ')
                    ),

                TextColumn::make('phone')
                    ->label('Phone')
                    ->formatStateUsing(fn ($record) => collect($record->phone ?? [])
                        ->map(fn ($item) => $item['phone'] ?? null)
                        ->filter()
                        ->implode(', ')
                    ),

                TextColumn::make('address')
                    ->label('Address')
                    ->formatStateUsing(fn ($record) => collect($record->address ?? [])
                        ->map(fn ($item) => $item['address'] ?? null)
                        ->filter()
                        ->implode(', ')
                    ),

                TextColumn::make('url_social_media')
                    ->label('Social Media')
                    ->formatStateUsing(fn ($record) => collect($record->url_social_media ?? [])
                        ->map(fn ($item) => $item['url_social_media'] ?? null)
                        ->filter()
                        ->implode(', ')
                    ),

            ])
            ->paginated(false)
            ->filters([
                // أي فلترات لو حبيت تضيفها
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
