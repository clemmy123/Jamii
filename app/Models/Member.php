<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'forum_id',
        'first_name',
        'last_name',
        'national_id',
        'phone',
        'email',
        'level',
        'joined_date',
        'status',
    ];

    protected $casts = [
        'joined_date' => 'date',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    // Member belongs to a Forum
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    // Access hierarchy through forum
    public function street()
    {
        return $this->forum?->street();
    }

    public function ward()
    {
        return $this->forum?->street?->ward();
    }

    public function council()
    {
        return $this->forum?->street?->ward?->council();
    }

    public function district()
    {
        return $this->forum?->street?->ward?->council?->district();
    }

    public function region()
    {
        return $this->forum?->street?->ward?->council?->district?->region();
    }

    public function country()
    {
        return $this->forum?->street?->ward?->council?->district?->region?->country();
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    */

    // Full name accessor
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    // Active members
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Filter by forum
    public function scopeByForum($query, $forumId)
    {
        return $query->where('forum_id', $forumId);
    }

    // Filter by level
    public function scopeByLevel($query, $level)
    {
        return $query->where('level', $level);
    }

    // Filter by district (for officers)
    public function scopeByDistrict($query, $districtId)
    {
        return $query->whereHas('forum.street.ward.council.district', function ($q) use ($districtId) {
            $q->where('id', $districtId);
        });
    }

    // Recently joined
    public function scopeRecent($query)
    {
        return $query->orderBy('joined_date', 'desc');
    }
}
