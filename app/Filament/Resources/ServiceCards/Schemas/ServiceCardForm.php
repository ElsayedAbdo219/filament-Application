<?php

namespace App\Filament\Resources\ServiceCards\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ServiceCardForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required()->maxLength(255)->placeholder('Enter the service card title here...'),
                TextInput::make('description')->label('Description')->required()->maxLength(65535)->placeholder('Enter the service card description here...'),
                FileUpload::make('icon')->label('Icon')->required()->maxLength(255)->placeholder('Enter the service card icon here...'),
            ]);
    }
}
