<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLophocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->integer('id_nganhhoc')->nullable()->unsigned();
            $table->integer('id_khoahoc')->nullable()->unsigned();
            $table->foreign('id_nganhhoc')->references('id')->on('nganhhocs')->onDelete('cascade');
            $table->foreign('id_khoahoc')->references('id')->on('khoahocs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lophocs');
    }
}
