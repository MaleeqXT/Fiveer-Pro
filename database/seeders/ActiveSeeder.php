<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActiveSeeder extends Seeder
{
    public function run()
    {
        DB::table('actives')->insert([
            [
                'gig_name' => 'I will create a professional website',
                'impressions' => 1200,
                'clicks' => 150,
                'orders' => 10,
                'cancellations' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gig_name' => 'I will design a custom logo for your business',
                'impressions' => 800,
                'clicks' => 100,
                'orders' => 8,
                'cancellations' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
