<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Laravel\Pail\File;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('description')->label('Description')->required()->maxLength(65535)->placeholder('Enter the service description here...'),   
                FileUpload::make('icon')->label('Icon')->required()->maxLength(255)->placeholder('Enter the service icon here...'),
                TextInput::make('secondary_title')->label('Secondary Title')->required()->maxLength(65535)->placeholder('Enter the service secondary title here...'),
                TextInput::make('secondary_title_description')->label('Secondary Description')->required()->maxLength(65535)->placeholder('Enter the service secondary description here...'),

            ]);
    }
}
