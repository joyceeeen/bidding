<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        ['first_name' => "Test",'last_name'=>'Admin','email'=>'admin@mail.com','is_seller'=>'0','is_admin'=>'1' ,'is_confirmed'=>'0', 'password'=>'$2y$10$SgMA3QcVfggJ0Vz8mGi5o.yXNMCkAMaEZOOzGOuo5SIp/4u2mexuS','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
      ]);
    }
}
