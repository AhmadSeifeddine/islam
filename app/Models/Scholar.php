<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Scholar extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'nickname',
        'nationality',
        'birth_date',
        'death_date',
        'website_url',
        'youtube_url',
        'facebook_url',
        'instagram_url',
        'tiktok_url',
        'telegram_url',
        'x_url',
        'status',
        'biography',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function youtubes()
    {
        return $this->hasMany(Youtube::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function fiqh()
    {
        return $this->hasMany(Fiqh::class);
    }

    public function akida()
    {
        return $this->hasMany(Akida::class);
    }
}


