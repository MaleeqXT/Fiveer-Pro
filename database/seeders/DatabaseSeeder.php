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

        $this->call(EarningSeeder::class);
        $this->call(DataRangeSeeder::class);

        $this->call(ContactSeeder::class);
        $this->call(BreifSeeder::class);

        $this->call(PrioritySeeder::class);
        $this->call(ActiveSeeder::class);
        $this->call(LateSeeder::class);
        $this->call(DeliveredSeeder::class);
        $this->call(CompletedSeeder::class);
        $this->call(StartedSeeder::class);


        
        $this->call(AccountSeeder::class);
        $this->call(SecuritySeeder::class);
        $this->call(NotificationSeeder::class);



        $this->call(OnlineSeeder::class);
        $this->call(PendingSeeder::class);
        $this->call(RequiredSeeder::class);
        $this->call(DraftSeeder::class);
        $this->call(DeniedSeeder::class);
        $this->call(PausedSeeder::class);



    }
}
