<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecuritySetting extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'phone', 'security_question', 'security_answer'];

    protected $table = 'security_settings'; // Ensure table name is correct

}
