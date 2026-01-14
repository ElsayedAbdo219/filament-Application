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

    public function getEmailAttribute($value): string
    {
        return collect($value ?? [])
            ->pluck('email')
            ->implode(', ');
    }

    public function getPhoneAttribute($value): string
    {
        return collect($value ?? [])
            ->pluck('phone')
            ->implode(', ');
    }

    public function getAddressAttribute($value): string
    {
        return collect($value ?? [])
            ->pluck('address')
            ->implode(', ');
    }

    public function getUrlSocialMediaAttribute($value): string
    {
        return collect($value ?? [])
            ->pluck('url_social_media')
            ->implode(', ');
    }
}
