<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'feature_name',
        'basic',
        'standard',
        'premium',
        'price_basic',
        'price_standard',
        'price_premium',
        'extra_options',
    ];

    protected $casts = [
        'extra_options' => 'array', // Cast JSON to array
    ];
}

