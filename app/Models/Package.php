<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'feature_quick_bug_fixes', 'bug_fixes_basic', 'bug_fixes_standard', 'bug_fixes_premium',
        'feature_custom_laravel', 'custom_features_basic', 'custom_features_standard', 'custom_features_premium',
        'feature_responsive_website', 'responsive_basic', 'responsive_standard', 'responsive_premium',
        'pages_basic', 'pages_standard', 'pages_premium',
        'revisions_basic', 'revisions_standard', 'revisions_premium',
        'content_upload_basic', 'content_upload_standard', 'content_upload_premium',
        'plugins_basic', 'plugins_standard', 'plugins_premium',
        'price_basic', 'price_standard', 'price_premium', 'extra_option',
    ];
}

