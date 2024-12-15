<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Finance;

class FinanceSeeder extends Seeder
{
    public function run()
    {
        $finances = [
            [
                'month' => 'January',
                'year' => '2024',
                'amount' => 10000.50,
            ],
            [
                'month' => 'February',
                'year' => '2024',
                'amount' => 15000.00,
            ],
            [
                'month' => 'March',
                'year' => '2024',
                'amount' => 20000.75,
            ],
            [
                'month' => 'April',
                'year' => '2023',
                'amount' => 12000.00,
            ],
            [
                'month' => 'May',
                'year' => '2023',
                'amount' => null, // Example of a null amount
            ],
        ];

        foreach ($finances as $finance) {
            Finance::create($finance);
        }
    }
}
