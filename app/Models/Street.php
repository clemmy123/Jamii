<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Street extends Model
{
    use HasFactory;

    protected $fillable = [
        'ward_id',
        'name',
        'status',
    ];

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }

    // If Forum belongs to Street (from your previous migration)
    public function forums()
    {
        return $this->hasMany(Forum::class, 'street_id', 'id');
    }
}