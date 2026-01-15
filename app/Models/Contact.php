<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'title',
        'description',
        'email',
        'phone',
        'address',
        'url_social_media',
         'icon'
    ];

    protected $casts = [
        'email' => 'array',
        'phone' => 'array',
        'address' => 'array',
        'url_social_media' => 'array',
    ];

    // ======================
    // Accessors
    // ======================


}
