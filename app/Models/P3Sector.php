<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P3Sector extends Model
{
    protected $table = 'P3Sector';

    protected $fillable = [
        'name',
        'skills',
        'raw_materials'
    ];
}