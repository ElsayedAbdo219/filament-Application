<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required()->maxLength(255)->placeholder('Enter the portfolio title here...'),
            ]);
    }
}
