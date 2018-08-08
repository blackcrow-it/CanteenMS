<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	DB::table('roles')->insert([
            'title' => 'admin'
        ]);
        DB::table('roles')->insert( [
            'title' => 'quan-ly'
        ]);
        DB::table('roles')->insert([
            'title' => 'nhan-vien'
        ]);
    }
}
