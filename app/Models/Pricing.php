<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    //

    protected $table = 'pricing'; 
    protected $guarded = []; 
    
    protected $fillable = [
        'basic_name', 'standard_name', 'premium_name', 'basic_description', 
        'standard_description', 'premium_description', 'basic_days', 
        'standard_days', 'premium_days', 'basic_pages', 'standard_pages', 
        'premium_pages', 'basic_revisions', 'standard_revisions', 
        'premium_revisions', 'basic_content_upload', 'standard_content_upload', 
        'premium_content_upload', 'basic_plugins', 'standard_plugins', 
        'premium_plugins', 'basic_ecommerce', 'standard_ecommerce', 
        'premium_ecommerce', 'basic_products', 'standard_products', 
        'premium_products', 'basic_payment', 'standard_payment', 
        'premium_payment', 'basic_speed', 'standard_speed', 'premium_speed', 
        'basic_social_media', 'standard_social_media', 'premium_social_media', 
        'basic_price', 'standard_price', 'premium_price', 'gig_id' // Add 'gig_id' here
    ];
}
