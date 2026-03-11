<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'forum_id',
        'activity_name',
        'description',
        'start_date',
        'end_date',
        'budget'
    ];

    // Activity belongs to Forum
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}