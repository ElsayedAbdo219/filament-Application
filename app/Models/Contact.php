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
    ];

    protected $casts = [
        'email' => 'array',
        'phone' => 'array',
        'address' => 'array',
        'url_social_media' => 'array',
    ];

    # accessors
    public function getEmailAttribute($value)
    {
        return json_decode($value, true);
    }
    public function getPhoneAttribute($value)
    {
        return json_decode($value, true);
    }
    public function getAddressAttribute($value)
    {
        return json_decode($value, true);
    }
    public function getUrlSocialMediaAttribute($value)
    {
        return json_decode($value, true);
    }
}
