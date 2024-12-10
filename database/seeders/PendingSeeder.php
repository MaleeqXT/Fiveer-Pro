<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pendings')->insert([
            'gig_name' => 'Sample Gig',
            'impressions' => 1000,
            'clicks' => 50,
            'orders' => 10,
            'cancellations' => 1,
        ]);
    }
}
