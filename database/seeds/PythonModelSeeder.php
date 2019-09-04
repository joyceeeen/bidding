<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PythonModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pythons')->insert([
        ['product' => "Ampalaya",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Cabbage",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Calamansi",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Kamatis",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Karots",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Patatas",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Pipino",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Sibuyas",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Talong",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Well Milled Rice",'type'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Ampalaya",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Cabbage",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Calamansi",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Kamatis",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Karots",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Patatas",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Pipino",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Sibuyas",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Talong",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ['product' => "Well Milled Rice",'type'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
      ]);
    }
}
