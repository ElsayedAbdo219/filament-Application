<?php

namespace App\Filament\Resources\TeamSkills\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class TeamSkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
              TextInput::make('title')->label('title')->required()->maxLength(255)->placeholder('Enter the title person name here...'),
                FileUpload::make('icon')->label('Icon')->required()->placeholder('Enter the team person photo here...'),
                TextInput::make('description')->label('Description')->required()->maxLength(255)->placeholder('Enter the team person Description here...'),
            
            ]);
    }
}
