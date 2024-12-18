<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    //
    use HasFactory;

    protected $table = 'medias'; // Ensure this matches your table name

    protected $fillable = ['type', 'path','gig_id'];

    // In Media model (Media.php)
public function gig()
{
    return $this->belongsTo(Overview::class, 'gig_id'); // or the correct model name
}

}
