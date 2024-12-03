<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
    use HasFactory;

    protected $fillable = ['gig_detail_id', 'question', 'answer'];

    public function gigDetail()
    {
        return $this->belongsTo(GigDetail::class);
    }
}
