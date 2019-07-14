<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class StatusSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    DB::table('statuses')->insert([
      ['status' => "In Progress",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
      ['status' => "Ready for Pick-up",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
      ['status' => "To Rate",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
      ['status' => "Product Received",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
      ['status' => "Completed",'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
    ]);
  }
}
