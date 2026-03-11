<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'registration_number',
        'registration_date',
        'sector_id',
        'street_id',
        'total_members',
        'phone',
        'email',
        'description',
        'is_active'
    ];

    protected $casts = [
        'registration_date' => 'date',
        'is_active' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    // Forum belongs to a Street
    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    // Through street you can access hierarchy
    public function ward()
    {
        return $this->street?->ward();
    }

    public function council()
    {
        return $this->street?->ward?->council();
    }

    public function district()
    {
        return $this->street?->ward?->council?->district();
    }

    public function region()
    {
        return $this->street?->ward?->council?->district?->region();
    }

    public function country()
    {
        return $this->street?->ward?->council?->district?->region?->country();
    }

    // Forum belongs to Sector
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    // Forum has many Members
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    // Forum has many Activities
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    // Forum has many Fundings
    public function fundings()
    {
        return $this->hasMany(Funding::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    // Only active forums
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Filter by sector
    public function scopeBySector($query, $sectorId)
    {
        return $query->where('sector_id', $sectorId);
    }

    // Filter by district (through hierarchy)
    public function scopeByDistrict($query, $districtId)
    {
        return $query->whereHas('street.ward.council.district', function ($q) use ($districtId) {
            $q->where('id', $districtId);
        });
    }

    // Filter by region
    public function scopeByRegion($query, $regionId)
    {
        return $query->whereHas('street.ward.council.district.region', function ($q) use ($regionId) {
            $q->where('id', $regionId);
        });
    }
}