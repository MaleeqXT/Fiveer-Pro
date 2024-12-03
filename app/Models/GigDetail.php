<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GigDetail extends Model
{
    //
    use HasFactory;

    protected $fillable = ['description', 'milestones_enabled'];

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
