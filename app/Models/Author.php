<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'avatar',
        'bio',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'array',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
