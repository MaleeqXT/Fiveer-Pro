<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      

        $this->call(OverviewSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(RequireSeeder::class);
        $this->call(GigImageSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(BillingDetailsSeeder::class);
        $this->call(PaymentMethodsSeeder::class);
        $this->call(PrioritySeeder::class);
        $this->call(ActiveSeeder::class);
        $this->call(LateSeeder::class);
        $this->call(DeliveredSeeder::class);
        $this->call(CompletedSeeder::class);
        $this->call(CancelledSeeder::class);
        $this->call(StartedSeeder::class);
    }
}
