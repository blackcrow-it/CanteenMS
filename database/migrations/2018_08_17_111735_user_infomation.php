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
        $table->string('ten_tai_khoa');
        $table->string('path_hinh_anh');
        $table->string('ten_nhan_vien');
        $table->date('ngay_sinh');
        $table->string('gioi_tinh');
        $table->string('so_cmt');
        $table->string('sdt');
        $table->string('dia_chi');
        $table->string('email');
        $table->string('chuc_vu');
        $table->string('chuc_vu_alias');
        $table->dateTime('ngay_vao');
        $table->string('kieu_lam');
        $table->integer('so_ngay_nghi');
        $table->integer('luong');
        $table->text('ghi_chu');
        $table->timestamps();
        $table->foreign('ten_tai_khoa')->references('email')->on('users');
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
