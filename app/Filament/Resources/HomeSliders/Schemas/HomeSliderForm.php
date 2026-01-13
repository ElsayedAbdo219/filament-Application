<?php

namespace App\Filament\Resources\HomeSliders\Schemas;

use Laravel\Pail\File;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class HomeSliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('file_name')
                    ->label('Upload Slider Image')
                    ->image()
                    ->directory('home_sliders')
                    ->maxSize(2048),
                    TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter the slider title here...'),
            ]);
    }
}
