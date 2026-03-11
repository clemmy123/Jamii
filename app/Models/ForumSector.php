<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ForumSector extends Pivot
{
    use HasFactory;

    protected $table = 'forum_sector';

    protected $fillable = [
        'forum_id',
        'sector_id',
    ];

    // Optional: if you want timestamps on the pivot
    public $timestamps = true;
}