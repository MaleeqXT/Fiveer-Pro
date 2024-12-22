<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'company_name',
        'country',
        'state_region',
        'address',
        'city',
        'postal_code',
        'tax_id',
    ];
}

