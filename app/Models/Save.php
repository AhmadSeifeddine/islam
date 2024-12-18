<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'saveable_id',
        'saveable_type',
        'action',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function saveable()
    {
        return $this->morphTo();
    }
}
