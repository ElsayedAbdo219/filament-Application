<?php

namespace App\Filament\Resources\Posts;

use BackedEnum;
use App\Models\Post;
use App\Models\User;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Actions\DeleteBulkAction;
use Filament\Schemas\Components\Image;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ColorPicker;
use App\Filament\Resources\Posts\Pages\ManagePosts;

class PostResource extends Resource
{
  protected static ?string $model = Post::class;

  protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

  protected static ?string $recordTitleAttribute = 'title';

  public static function form(Schema $schema): Schema
  {
    return $schema
      ->components([
        TextInput::make('title')
          ->required()
          ->maxLength(255),
        Textarea::make('content')
          ->required()
          ->maxLength(255),
          // ColorPicker::make('color'),
    //       Select::make('author_id')
    // ->label('Author')
    // ->options(User::query()->pluck('name', 'id')),
        FileUpload::make('thumbnail')
        // ->multiple()
          ->disk('public')
          ->directory('thumbnails')
          ->required(),
        // ->maxLength(255),
        // TextInput::make('author_id')
        // ->required()
        // ->maxLength(255),
        TagsInput::make('tags')
          ->required(),
        // ->maxLength(255),
        Toggle::make('is_published')
          ->required(),
        // ->maxLength(255),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->recordTitleAttribute('title')
      ->columns([
        TextColumn::make('title')
          ->icon(Heroicon::Envelope)
          ->searchable(),
        TextColumn::make('content')->limit(50)->searchable(),
        ImageColumn::make('thumbnail')->label('Thumbnail'),
        TextColumn::make('author.name')->label('Author')->searchable(),
        IconColumn::make('is_published')->boolean()->label('Published'),
        TextColumn::make('created_at')->dateTime(),
      ])
      ->filters([
        //
      ])
      ->recordActions([
        EditAction::make(),
        DeleteAction::make(),
      ])
      ->toolbarActions([
        BulkActionGroup::make([
          DeleteBulkAction::make(),
        ]),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => ManagePosts::route('/'),
    ];
  }
}
