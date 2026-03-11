<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['region_id', 'name', 'status'];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}