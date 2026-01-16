<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class BlogPost extends Model implements HasMedia
{
   use InteractsWithMedia;
    protected $table = 'blog_posts';

    protected $fillable = [
        'title',
        'description',
        'icon',
        'file_name',
        'category_name',
        'auther_name',
        'comments_count',
        'published_date',
    ];
    
}
