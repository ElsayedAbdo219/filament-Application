<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamPerson extends Model
{
    protected $table = 'team_people';
    protected $fillable = [
        'icon',
        'title',
        'description',
        'small_icons',
    ];
}
