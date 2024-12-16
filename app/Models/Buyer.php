<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    // Table name (if different from the default)
    protected $table = 'buyers';

    // The attributes that are mass assignable
    protected $fillable = [
        'buyer_image',
        'buyer_name',
        'completed_orders',
        'amount_spent',
        'last_order',
    ];
}
