<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
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
                    ->label('Upload File (img / video) - optional')
                    ->disk('public')
                    ->directory('blogs')
                    ->acceptedFileTypes([
                        'image/*',
                        'video/*',
                    ])
                    ->maxSize(10240) // 10MB
                    ->nullable(),
                FileUpload::make('icon')
                    ->label('Upload Icon')
                    ->image()
                    ->directory('blogs')
                    ->maxSize(1024),
              DatePicker::make('published_at')
    ->label('Published At')
    ->required(),
                TextInput::make('category_name')
                    ->label('Category Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter the blog post category name here...'),
                TextInput::make('comments_count')
                    ->label('Comments Count')
                    ->required()
                    ->numeric()
                    ->maxLength(255)
                    ->placeholder(
                        'Enter the blog post comments count here...'),
                TextInput::make('auther_name')
                    ->label('Author Name(Optional)')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter the blog post author name here...'),

            ]);
    }
}
