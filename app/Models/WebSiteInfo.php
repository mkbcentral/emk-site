<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebSiteInfo extends Model
{
    protected $fillable = [
        'name',
        'description',
        'phone',
        'other_phone',
        'email',
        'other_email',
        'address',
        'logo',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
