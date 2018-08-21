<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_infomation', function (Blueprint $table) {
            $table->increments('ma_san_pham');
            $table->string('ten_san_pham');
            $table->string('ten_nha_san_xuat');
            $table->string('ten_alias')->unique();
            $table->integer('don_gia');
            $table->integer('so_luong');
            $table->string('don_vi');
            $table->text('ghi_chu');
        });

        Schema::create('product_input', function (Blueprint $table) {
            $table->increments('stt');
            $table->string('ten_san_pham');
            $table->string('ten_alias');
            $table->integer('so_luong_nhap');
            $table->dateTime('ngay_nhap');
            $table->text('ghi_chu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_infomation');
        Schema::dropIfExists('product_input');
    }
}
