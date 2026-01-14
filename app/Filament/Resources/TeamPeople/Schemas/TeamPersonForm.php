<?php

namespace App\Filament\Resources\TeamPeople\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeamPersonForm
{
  public static function configure(Schema $schema): Schema
{
    return $schema
        ->components([
            TextInput::make('title')
                ->label('Title')
                ->required()
                ->maxLength(255),

            FileUpload::make('icon')
                ->label('Icon')
                ->image()
                ->required(),

            TextInput::make('description')
                ->label('Description')
                ->required()
                ->maxLength(255),

            FileUpload::make('small_icons')
                ->label('Small Icons')
                ->multiple()
                ->image()
                ->required(),
        ]);
}

}
