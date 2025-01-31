<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Youtube extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'url',
        'scholar_id',
        'category_id',
        'duration',
        'status',
    ];

    public function scholar()
    {
        return $this->belongsTo(Scholar::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function explanations()
    {
        return $this->hasMany(Book_Explanation::class);
    }

    public function saves()
    {
        return $this->morphMany(Save::class, 'saveable');
    }

    public function collectionItems()
    {
        return $this->morphMany(Collection_Item::class, 'item');
    }

    public function getEmbedUrlAttribute()
    {
        $videoId = '';

        if (preg_match('/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $this->url, $matches)) {
            $videoId = $matches[1];
        }

        return 'https://www.youtube.com/embed/' . $videoId;
    }
}
