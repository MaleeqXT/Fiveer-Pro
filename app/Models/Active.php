<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    use HasFactory;

    protected $fillable = [
        'gig_name',
        'impressions',
        'clicks',
        'orders',
        'cancellations',
    ];
}
