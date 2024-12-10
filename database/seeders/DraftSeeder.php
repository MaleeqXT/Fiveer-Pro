<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB facade to use the query builder

class DraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert sample data into the 'drafts' table
        DB::table('drafts')->insert([
            [
                'gig_name' => 'Website Development',
                'impressions' => 1200,
                'clicks' => 250,
                'orders' => 30,
                'cancellations' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gig_name' => 'Graphic Design',
                'impressions' => 800,
                'clicks' => 150,
                'orders' => 20,
                'cancellations' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gig_name' => 'Content Writing',
                'impressions' => 1000,
                'clicks' => 300,
                'orders' => 25,
                'cancellations' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
