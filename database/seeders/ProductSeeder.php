<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 10;
        for ($i = 0; $i < $max; $i++) {
            Product::factory()->create();
        }
    }
}
