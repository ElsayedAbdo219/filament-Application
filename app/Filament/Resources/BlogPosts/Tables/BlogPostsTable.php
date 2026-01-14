<?php

namespace App\Filament\Resources\BlogPosts\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Schemas\Components\Image;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class BlogPostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title')->sortable()->searchable(),
                TextColumn::make('description')->label('Description')->limit(50)->wrap(),
                ImageColumn::make('icon')->label('Icon')->rounded(),
                ImageColumn::make('file_name')->label('Media')->rounded(),
                TextColumn::make('category_name')->label('Category')->sortable()->searchable(),
                TextColumn::make('auther_name')->label('Author')->sortable()->searchable(),
                TextColumn::make('comments_count')->label('Comments')->sortable(),
                TextColumn::make('published_at')->label('Published At')->date()->sortable(),
                TextColumn::make('created_at')->label('Created At')->date()->sortable(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
