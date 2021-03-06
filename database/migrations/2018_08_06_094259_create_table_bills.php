<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_infomation', function (Blueprint $table) {
            $table->increments('stt');
            $table->string('ma_hoa_don')->unique();
            $table->integer('so_loai_san_pham');
            $table->dateTime('ngay_ban');
            $table->integer('tong_tien');
            $table->string('nhan_vien');
        });

        Schema::create('product_output', function (Blueprint $table) {
            $table->increments('stt');
            $table->string('ma_hoa_don');
            $table->string('ten_san_pham');
            $table->string('ten_nha_san_xuat');
            $table->string('ten_alias');
            $table->integer('so_luong_xuat');
            $table->integer('don_gia');
            $table->string('don_vi');
            $table->integer('thanh_tien');
            $table->string('nhan_vien');
            $table->timestamps();
            $table->foreign('ma_hoa_don')->references('ma_hoa_don')->on('bill_infomation')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_infomation');
        Schema::dropIfExists('product_output');
    }
}
