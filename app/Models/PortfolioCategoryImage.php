<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategoryImage extends Model
{
    protected $fillable = [
        'portfolio_category_id',
        'file_name',
        'title',
        'icon',
        'description',
    ];

    public function portfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
