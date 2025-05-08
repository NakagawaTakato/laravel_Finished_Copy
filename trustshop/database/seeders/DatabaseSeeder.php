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
        $this->call(ShopsTableSeeder::class);
        $this->call(MerchandisesTableSeeder::class);
        $this->call(NamesTableSeeder::class);
        $this->call(TransformationsTableSeeder::class);
        $this->call(AddsTableSeeder::class);
    }
}
