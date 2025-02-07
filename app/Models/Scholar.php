<?php

namespace App\Models;

use GeniusTS\HijriDate\Hijri;
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
        'is_in_homepage',
        'recommended_score',
        'created_by',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->singleFile();
    }

    public function getAvatarAttribute()
    {
        return $this->getFirstMediaUrl('avatar');
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeIsInHomepage($query)
    {
        return $query->where('is_in_homepage', true);
    }

    public function transformDateToHijri($date)
    {
        if (!$date) return null;

        try {
            $hijri = Hijri::convertToHijri($date);
            return $hijri->year;
        } catch (\Exception $e) {
            return null;
        }
    }

    public function getBirthDateAttribute($value)
    {
        return $this->transformDateToHijri($value);
    }

    public function getDeathDateAttribute($value)
    {
        return $this->transformDateToHijri($value);
    }
}
