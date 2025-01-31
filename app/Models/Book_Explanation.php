<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Explanation extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'youtube_id',
        'status',
    ];

    protected $table = 'book_explanations';

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function youtube()
    {
        return $this->belongsTo(Youtube::class);
    }


}
