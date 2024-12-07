<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDetail extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'service_plan', 'business_name', 'business_description', 'business_url', 'business_type',
        'business_size', 'business_industry', 'business_stage',
    ];
    
    }
    

