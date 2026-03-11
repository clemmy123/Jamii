<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Council extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_id',
        'name',
        'status',
    ];

    /**
     * A council belongs to a district
     */
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
}