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
        ['category_name' => "Vegetables",'thumbnail'=>'images/categories/vegetables.jpg','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['category_name' => "Fruits",'thumbnail'=>'images/categories/fruits.jpg','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['category_name' => "Fish",'thumbnail'=>'images/categories/fish.jpg','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['category_name' => "Poultry",'thumbnail'=>'images/categories/poultry.jpg','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
      ]);
    }
}
