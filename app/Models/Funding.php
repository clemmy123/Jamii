<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    protected $fillable = [
        'forum_id',
        'donor_name',
        'amount',
        'funding_date',
        'purpose'
    ];

    // Funding belongs to Forum
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}