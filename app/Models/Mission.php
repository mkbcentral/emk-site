<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
