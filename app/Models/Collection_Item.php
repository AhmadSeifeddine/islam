<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection_Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_id',
        'item_id',
        'item_type',
        'added_at',
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function item()
    {
        return $this->morphTo();
    }
}
