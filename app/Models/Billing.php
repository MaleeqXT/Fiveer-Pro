<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    //
    protected $table = 'billing_details'; // Ensure this matches your table name

    protected $fillable = [
        'full_name',
        'company_name',
        'country',
        'state_region',
        'address',
        'city',
        'postal_code',
        'tax_id',
        'email_invoices',
    ];
}
