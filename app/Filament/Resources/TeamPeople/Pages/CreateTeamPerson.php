<?php

namespace App\Filament\Resources\TeamPeople\Pages;

use App\Filament\Resources\TeamPeople\TeamPersonResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTeamPerson extends CreateRecord
{
    protected static string $resource = TeamPersonResource::class;
}
