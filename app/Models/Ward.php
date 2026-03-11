<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = [
        'council_id',
        'name',
        'status',
    ];

    public function council()
    {
        return $this->belongsTo(Council::class, 'council_id', 'id');
    }

    public function streets()
    {
        return $this->hasMany(Street::class, 'ward_id', 'id');
    }
}