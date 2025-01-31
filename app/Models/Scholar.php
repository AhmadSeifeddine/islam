<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Scholar extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'nickname',
        'nationality',
        'birth_date',
        'death_date',
        'biography',
        'website_url',
        'facebook_url',
        'instagram_url',
        'youtube_url',
        'tiktok_url',
        'telegram_url',
        'x_url',
        'status',
        'is_in_homepage'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->singleFile();
    }
}
