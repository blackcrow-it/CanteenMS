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
  		DB::table('users')->insert(	[
  			'name' => 'admin',
  			'email' => 'admin@localtion.dev',
  			'password' => '$2y$10$sM2rCd3lSioNOO1kmRNloeaZAV2r5g37UjHe5/n8fvjc9HfhfteTO'
  		]);
      DB::table('product_infomation')->insert( [
        'ten_san_pham' => 'bim bim',
        'ten_nha_san_xuat' => 'poca',
        'ten_alias' => 'bim-bim-poca',
        'don_gia' => 2000,
        'so_luong' => 100,
        'don_vi' => 'gói',
        'ghi_chu' => 'không'
      ]);
      DB::table('product_infomation')->insert( [
        'ten_san_pham' => 'nước ngọt',
        'ten_nha_san_xuat' => 'coca',
        'ten_alias' => 'nuoc-ngot-coca',
        'don_gia' => 8000,
        'so_luong' => 50,
        'don_vi' => 'lon',
        'ghi_chu' => 'không'
      ]);
      DB::table('product_infomation')->insert( [
        'ten_san_pham' => 'nước ngọt',
        'ten_nha_san_xuat' => 'pepsi',
        'ten_alias' => 'nuoc-ngot-pepsi',
        'don_gia' => 8000,
        'so_luong' => 100,
        'don_vi' => 'lon',
        'ghi_chu' => 'không'
      ]);
      DB::table('product_infomation')->insert( [
        'ten_san_pham' => 'xúc xích',
        'ten_nha_san_xuat' => 'Đức Việt',
        'ten_alias' => 'xuc-xich-duc-viet',
        'don_gia' => 10000,
        'so_luong' => 200,
        'don_vi' => 'cái',
        'ghi_chu' => 'không'
      ]);
      
    }
}
