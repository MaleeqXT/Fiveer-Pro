<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsPerson extends Model
{
    use HasFactory;

    // Explicitly define the table name
    protected $table = 'us_persons';

    protected $fillable = ['name', 'is_us_person'];
}
