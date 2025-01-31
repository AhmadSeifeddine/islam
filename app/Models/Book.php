<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Book extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'scholar_id',
        'description',
        'category_id',
        'publication_date',
        'genre',
        'language',
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

}
