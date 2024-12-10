<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Required;

class RequiredSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert sample data
        Required::create([
            'gig_name' => 'Website Development',
            'impressions' => 250,
            'clicks' => 100,
            'orders' => 45,
            'cancellations' => 3,
        ]);

        Required::create([
            'gig_name' => 'Graphic Design',
            'impressions' => 180,
            'clicks' => 70,
            'orders' => 30,
            'cancellations' => 2,
        ]);

        Required::create([
            'gig_name' => 'Content Writing',
            'impressions' => 300,
            'clicks' => 120,
            'orders' => 60,
            'cancellations' => 4,
        ]);
    }
}
