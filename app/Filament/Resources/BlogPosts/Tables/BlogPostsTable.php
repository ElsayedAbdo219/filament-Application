<?php

namespace App\Filament\Resources\BlogPosts\Tables;

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
        return $table
            ->columns([
                TextColumn::make('title')->label('Title')->sortable()->searchable(),
                TextColumn::make('description')->label('Description')->limit(50)->wrap(),
                ImageColumn::make('icon')->label('Icon')->rounded(),
                TextColumn::make('file_name')
                    ->label('Media')
                    ->formatStateUsing(function ($state) {
                        if (! $state) {
                            return 'No media';
                        }
                        $extension = pathinfo($state, PATHINFO_EXTENSION);
                        if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                            return '<img src="'.asset('storage/'.$state).'" width="120" style="border-radius:6px;" />';
                        }
                        if (in_array(strtolower($extension), ['mp4', 'webm', 'ogg'])) {
                            return '<video width="200" controls>
                        <source src="'.asset('storage/'.$state).'" type="video/'.$extension.'">
                        </video>';
                        }

                        return '<a href="'.asset('storage/'.$state).'" target="_blank">Download</a>';
                    })
                    ->html(),
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
