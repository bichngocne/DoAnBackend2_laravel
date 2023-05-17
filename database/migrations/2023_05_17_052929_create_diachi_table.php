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
        Schema::create('diachi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();;
            $table->string('tinh')->nullable();;
            $table->string('huyen')->nullable();;
            $table->string('xa')->nullable();;
            $table->string('cuThe')->nullable();;
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
        Schema::dropIfExists('diachi');
    }
};
