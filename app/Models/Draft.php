<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;

    // Define the table name if it does not match the model's default naming convention
    protected $table = 'drafts';

    // Specify fields allowed for mass assignment
    protected $fillable = [
        'gig_name',
        'impressions',
        'clicks',
        'orders',
        'cancellations'
    ];
}
