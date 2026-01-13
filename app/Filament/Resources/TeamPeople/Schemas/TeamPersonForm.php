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
                TextInput::make('title')->label('title')->required()->maxLength(255)->placeholder('Enter the title person name here...'),
                FileUpload::make('icon')->label('Icon')->required()->maxLength(255)->placeholder('Enter the team person photo here...'),
                TextInput::make('description')->label('Description')->required()->maxLength(255)->placeholder('Enter the team person Description here...'),
                FileUpload::make('small_icons')->label('Small Icons')->required()->maxLength(255)->placeholder('Enter the team person small icons here...'),
            
                ]);
    }
}
