<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $table = 'home_sliders';

    protected $fillable = [
        'title',
        'file_name',
    ];
}
