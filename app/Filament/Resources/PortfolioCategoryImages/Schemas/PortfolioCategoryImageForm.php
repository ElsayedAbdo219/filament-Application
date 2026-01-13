<?php

namespace App\Filament\Resources\PortfolioCategoryImages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortfolioCategoryImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('portfolio_category_id')
                    ->label('Portfolio Category')
                    ->relationship('portfolioCategory', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                FileUpload::make('file_name')
                    ->label('Image')
                    ->image()
                    ->required(),
                      FileUpload::make('icon')
                    ->label('Icon')
                    ->image()
                    ->required(),

                    TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Description')
                      ->required()
                    ->maxLength(65535),

            ]);
    }
}
