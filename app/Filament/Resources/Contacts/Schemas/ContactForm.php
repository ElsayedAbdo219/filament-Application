<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Define form components here
              TextInput::make('title')->label('Title'),
              Textarea::make('description')->label('Description'),
              Repeater::make('phone')->label('Phone Numbers')
                    ->schema([
                        TextInput::make('phone')->label('Phone Number')->required(),
                    ])
                    ->minItems(1)
                    ->maxItems(5)
                    ->columnSpan('full'),
              Repeater::make('email')->label('Email Addresses')
                    ->schema([
                        TextInput::make('email')->label('Email Address')->required()->email(),
                        ])
                    ->minItems(1)
                    ->maxItems(5)
                    ->columnSpan('full'),
              Repeater::make('address')->label('Addresses')
                    ->schema([
                        TextInput::make('address')->label('Address')->required(),
                    ])
                    ->minItems(1)
                    ->maxItems(5)
                    ->columnSpan('full'),
              Repeater::make('url_social_media')->label('Social Media URLs')
                    ->schema([
                        TextInput::make('url_social_media')->label('Social Media URL')->required()->url(),
                    ])
                    ->minItems(1)
                    ->maxItems(5)
                    ->columnSpan('full'),
            ]);
    }
}
