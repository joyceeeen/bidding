<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  //    DB::table('categories')->truncate();


      DB::table('categories')->insert([
        ['category_name' => "Vegetables",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['category_name' => "Fruits",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['category_name' => "Fish",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['category_name' => "Poultry",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
      ]);
    }
}
