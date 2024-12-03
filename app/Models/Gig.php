<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gig extends Model
{
    //
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'milestones_enabled'];

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
