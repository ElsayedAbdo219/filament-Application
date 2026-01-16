<?php

namespace App\Filament\Resources\BlogPosts\Tables;

use App\Models\BlogPost;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BlogPostsTable
{
    public static function configure(Table $table): Table
    {
        // $rows = BlogPost::all()->map(function ($post) {
        //     return [
        //         'title' => $post->title,
        //         'description' => $post->description,
        //         'icon' => $post->icon,
        //         'file_name' => $post->file_name,
        //         'category_name' => $post->category_name,
        //         'auther_name' => $post->auther_name,
        //         'comments_count' => $post->comments_count,
        //         'published_date' => $post->published_date,
        //         'created_at' => $post->created_at,
        //     ];
        // });

        // dd($rows->toArray()); // ⚡ هنا هتشوف كل الـ rows كـ array

        return $table
            ->columns([
                TextColumn::make('title')->label('Title')->sortable()->searchable(),
                TextColumn::make('description')->label('Description')->limit(50)->wrap(),
                ImageColumn::make('icon')->label('Icon')->rounded(),
                ImageColumn::make('file_name')->label('Media')->disk('public')->rounded(),
                TextColumn::make('category_name')->label('Category')->sortable()->searchable(),
                TextColumn::make('auther_name')->label('Author')->sortable()->searchable(),
                TextColumn::make('comments_count')->label('Comments')->sortable(),
                TextColumn::make('published_date')->label('Published Date')->date()->sortable(),
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
