<?php

namespace Database\Seeders;

use App\Models\Denied;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeniedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Denied::create([
            'gig_name' => 'Website Design',
            'impressions' => 120,
            'clicks' => 15,
            'orders' => 3,
            'cancellations' => 1,
        ]);

        Denied::create([
            'gig_name' => 'App Development',
            'impressions' => 200,
            'clicks' => 30,
            'orders' => 5,
            'cancellations' => 2,
        ]);

        Denied::create([
            'gig_name' => 'Graphic Design',
            'impressions' => 150,
            'clicks' => 20,
            'orders' => 4,
            'cancellations' => 0,
        ]);
    }
}
