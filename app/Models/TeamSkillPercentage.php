<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamSkillPercentage extends Model
{
    protected $fillable = [
        'skill_name',
        'percentage',
    ];
}
