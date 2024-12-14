<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Itemlist;

class ItemlistSeeder extends Seeder
{
    public function run(): void
    {
        // Create some dummy data
        $itemlists = [
            ['name' => 'Project Ideas', 'description' => 'A list of potential project ideas.'],
            ['name' => 'Grocery Shopping', 'description' => 'Weekly grocery shopping list.'],
            ['name' => 'Learning Resources', 'description' => 'A list of tutorials and courses.'],
        ];

        // Insert data into the database
        foreach ($itemlists as $itemlist) {
            Itemlist::create($itemlist);
        }
    }
}
