<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'status',
    ];

    /**
     * Get all regions for this country
     */
    public function regions()
    {
        return $this->hasMany(Region::class, 'country_id', 'id');
    }
}