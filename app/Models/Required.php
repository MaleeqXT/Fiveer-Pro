<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Required extends Model
{
    use HasFactory;

    protected $table = 'requireds';

    // Fields that can be mass assigned
    protected $fillable = [
        'gig_name',
        'impressions',
        'clicks',
        'orders',
        'cancellations',
    ];
}
