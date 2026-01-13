<?php

namespace App\Filament\Resources\Messages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MessagesTable
{
  
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
              TextColumn::make('full_name')->label('Full Name')->searchable()->sortable(),
              TextColumn::make('phone_number')->label('Phone Number')->searchable()->sortable(),
              TextColumn::make('email_content')->label('Email Content')->limit(50)->searchable()->sortable(),
              TextColumn::make('message_content')->label('Message Content')->limit(50)->searchable()->sortable(),
              TextColumn::make('created_at')->label('Created At')->dateTime()->sortable(),
            ])
            ->filters([
              
            ])
            ->recordActions([
                ViewAction::make(),
                // EditAction::make(),
            ])
             ->headerActions([
            //   CreateAction::make(),
          ])
            ->toolbarActions([
                BulkActionGroup::make([
                    // DeleteBulkAction::make(),
                ]),
            ]);
    }
}
