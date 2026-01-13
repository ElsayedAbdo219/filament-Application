<?php

namespace App\Filament\Resources\AboutUs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;

class AboutUsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
            ]);
    }
}
