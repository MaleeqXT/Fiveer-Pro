<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('overviews')->insert([
            [
                'title'        => 'Web Development Expert', // Add the title field
                'category'     => 'Graphics & Design',
                'sub_category' => 'Mobile App Development',
                'service_type' => 'Front-End Development',
                'website_type' => 'E-Commerce store',
                'tags'         => 'webdeveloper, tech, frontend',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => 'Mobile App Developer', // Add the title field
                'category'     => 'Programming & Tech',
                'sub_category' => 'Mobile App Development',
                'service_type' => 'Mobile App Development',
                'website_type' => 'Business',
                'tags'         => 'mobile, app, development',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => 'SEO Expert', // Add the title field
                'category'     => 'Marketing',
                'sub_category' => 'SEO Optimization',
                'service_type' => 'SEO Optimization',
                'website_type' => 'Landing Page',
                'tags'         => 'SEO, optimization, marketing',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}
