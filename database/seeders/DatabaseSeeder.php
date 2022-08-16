<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(ProductSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PaymentSeeder::class);
        // $this->call(PaymentDetailSeeder::class);

    }
}
