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
      $date = new \DateTime();
      $my_date = $date->format('Y-m-d H:i:s');
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
      
      DB::table('user_infomation')->insert( [
        'ten_tai_khoan' => 'admin@localtion.dev',
        'path_hinh_anh' => 'images/avatar.jpg',
        'ten_nhan_vien' => 'admin',
        'ngay_sinh' => '1999-08-11',
        'gioi_tinh' => 'nam',
        'so_cmt' => '071071417',
        'sdt' => '01633333549',
        'dia_chi' => 'Hanoi',
        'email' => 'admin@gmail.com',
        'chuc_vu' => 'Admin',
        'chuc_vu_alias' => 'admin',
        'ngay_vao' => $my_date,
        'kieu_lam' => 'full-time',
        'so_ngay_nghi' => 0,
        'luong' => 20000000,
        'ghi_chu' => 'Khong'
      ]);
    }
}
