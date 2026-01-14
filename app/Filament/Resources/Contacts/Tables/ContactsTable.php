<?php

namespace App\Filament\Resources\Contacts\Tables;

use App\Models\Contact;
use Dom\Implementation;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
      // dd(Contact::all());
        return $table
            ->columns([
                TextColumn::make('title')->label('Title'),
                TextColumn::make('description')->label('Description'),
                ImageColumn::make('icon')->label('Icon'),
                TextColumn::make('email')->label('Email Addresses')->limit(50)->wrap(),
                TextColumn::make('phone')->label('Phone Numbers')->limit(50)->wrap(),
                TextColumn::make('address')->label('Addresses')->limit(50)->wrap(),
                TextColumn::make('url_social_media')->label('Social Media URLs')->limit(50)->wrap(),
            ])
            ->paginated(false)
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
