<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
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

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

}
