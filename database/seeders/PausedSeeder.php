<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paused;

class PausedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paused::create([
            'gig_name' => 'Example Gig 1',
            'impressions' => 100,
            'clicks' => 20,
            'orders' => 5,
            'cancellations' => 1,
        ]);

        Paused::create([
            'gig_name' => 'Example Gig 2',
            'impressions' => 200,
            'clicks' => 40,
            'orders' => 10,
            'cancellations' => 2,
        ]);
    }
}
