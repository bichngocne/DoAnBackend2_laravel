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
        Schema::create('donhangchitiet', function (Blueprint $table) {
            $table->id();
            $table->double('phivanchuyen');
            $table->integer('id_sanpham')->nullable();
            $table->foreign('id_sanpham')->references('id')->on('sanpham')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_donhang')->nullable();
            $table->foreign('id_donhang')->references('id')->on('donhang')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('soLuongsp');
            $table->double('gia');
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
        Schema::dropIfExists('donhangchitiet');
    }
};
