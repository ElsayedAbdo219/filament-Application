<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required()->maxLength(255)->placeholder('Enter the blog title here...'),
                Textarea::make('description')->label('Description')->required()->maxLength(65535)->placeholder('Enter the blog description here...'),
            ]);
    }
}
