<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status',
        'scholar_id',
        'category_id',
        'writing_type',
    ];

    public function scholar()
    {
        return $this->belongsTo(Scholar::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
