<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserInfomation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_infomation', function (Blueprint $table) {
        $table->increments('stt');
        $table->string('ten_tai_khoan');
        $table->string('path_hinh_anh')->nullable();
        $table->string('ten_nhan_vien');
        $table->date('ngay_sinh')->nullable();
        $table->string('gioi_tinh')->nullable();
        $table->string('so_cmt')->nullable();
        $table->string('sdt')->nullable();
        $table->string('dia_chi')->nullable();
        $table->string('email')->nullable();
        $table->string('chuc_vu')->nullable();
        $table->string('chuc_vu_alias')->nullable();
        $table->dateTime('ngay_vao')->nullable();
        $table->string('kieu_lam')->nullable();
        $table->integer('so_ngay_nghi')->nullable();
        $table->integer('luong')->nullable();
        $table->text('ghi_chu')->nullable();
        $table->timestamps();
        $table->foreign('ten_tai_khoan')->references('email')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infomation');
    }
}
