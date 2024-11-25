<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Overview extends Model
{
    //
    protected $fillable = [
        'title',
        'category',
        'sub_category',
        'service_type',
        'website_type',
        'tags',
    ];
}
