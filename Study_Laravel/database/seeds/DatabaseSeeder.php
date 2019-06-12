<?php

use Illuminate\Database\Seeder;

use Illuminate\support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['username'=>'tu3816329','name'=>'Do Thien Tu','email'=>'tu3816329@gmail.com','password'=>Hash::make(123456)]);
         $this->call(NewsTableSeeder::class);

    }
}
