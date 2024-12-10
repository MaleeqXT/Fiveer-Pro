<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class MyList extends Model
{
    //
    use HasFactory;

    protected $fillable = ['list_name', 'description'];
}
