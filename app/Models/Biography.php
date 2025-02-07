<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    use HasFactory;

    protected $fillable = [
        'scholar_id',
        'biography',
        'status',
    ];

    public function scholar()
    {
        return $this->belongsTo(Scholar::class);
    }
}
