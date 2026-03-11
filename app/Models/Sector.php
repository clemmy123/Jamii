<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'sector_name',
        'description'
    ];

    // Many-to-Many with Forums
    public function forums()
    {
        return $this->belongsToMany(
            Forum::class,
            'forum_sector',
            'sector_id',
            'forum_id'
        );
    }
}