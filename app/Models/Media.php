<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    //
    use HasFactory;

    protected $table = 'medias'; // Ensure this matches your table name

    protected $fillable = ['type', 'path'];

}
