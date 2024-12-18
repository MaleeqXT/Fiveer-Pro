<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_image',
        'buyer_name',
        'completed_orders',
        'amount_spent',
        'last_order',
    ];

    protected $casts = [
        'last_order' => 'datetime', // Cast last_order to a datetime instance
    ];
}


