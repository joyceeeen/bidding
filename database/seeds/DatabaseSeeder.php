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
         //$this->call(CategoryTable::class);
//          $this->call(SubCategoryTable::class);
//          $this->call(StatusSeeder::class);
//          $this->call(AdminSeeder::class);
//          $this->call(ForecastingDataSeed::class);
         $this->call(PythonModelSeeder::class);
    }
}
