<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter the blog post title here...'),
                Textarea::make('description')
                    ->label('Description')
                    ->rows(5)
                    ->cols(50)
                    ->autosize()
                    ->placeholder('Enter the blog post description here...'),
                FileUpload::make('file_name')
                ->label('Upload Image')
                ->image()
                ->directory('blogs')   
                ->maxSize(1024), 
                FileUpload::make('icon')
                  ->label('Upload Image')
                ->image() 
                ->directory('blogs') 
                ->maxSize(1024), 
            ]);
    }
}
