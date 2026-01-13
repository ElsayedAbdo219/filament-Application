<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'description',
        'icon',
        'secondary_title',
        'secondary_title_description',
    ];
}
