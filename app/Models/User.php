<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'role'
    ];

    // One User registers many Forums
    public function forums()
    {
        return $this->hasMany(Forum::class, 'registered_by');
    }
}