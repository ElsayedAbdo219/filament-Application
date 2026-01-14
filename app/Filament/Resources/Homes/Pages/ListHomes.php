<?php

namespace App\Filament\Resources\Homes\Pages;

use App\Models\Home;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Homes\HomeResource;

class ListHomes extends ListRecords
{
    protected static string $resource = HomeResource::class;

    protected function getHeaderActions(): array
    {
      if (Home::count() >= 1)
          return [];
        else
          return [
            CreateAction::make()
          ];
    }
}
