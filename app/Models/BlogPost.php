<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
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
