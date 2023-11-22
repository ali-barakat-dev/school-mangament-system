<?php

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
        $this->call(BloadTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);

        $this->call(RseligionTableSeeder::class);

    }
}
