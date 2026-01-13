<?php

namespace App\Filament\Resources\Homes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class HomeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('icon')
                    ->label('Upload Icon Image')
                    ->image()
                    ->directory('homes')
                    ->maxSize(2048),
                    Textarea::make('description')
                    ->label('description')
                    ->rows(5)
                    ->cols(50)
                    ->autosize()
                    ->placeholder('Enter the description here...'),
            ]);
    }
}
