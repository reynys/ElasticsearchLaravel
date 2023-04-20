<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class BlogArticle extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'description',
        'content',
        'slug',
    ];

    public function searchableAs()
    {
        return 'articles';
    }
}
