<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('sp_id');
            $table->string('tensp',255);
            $table->text('mota');
            $table->integer('soluong');
            $table->bigInteger('gia');
            $table->string('hinhanh');
            $table->integer('luotxem')->default(0);
            $table->integer('luotthich')->default(0);
            $table->integer('id_loaisp')->nullable();
            $table->foreign('id_loaisp')->references('id')->on('loaisanpham')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_khuyenmai')->nullable();
            $table->foreign('id_khuyenmai')->references('id')->on('khuyenmai')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
};
