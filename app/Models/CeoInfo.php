<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CeoInfo extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image', // Optional image field
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
