<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
        'status',
    ];

    /**
     * Get the country that owns the region
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}