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
            $table->unsignedInteger('id_nganhhoc');
            $table->unsignedInteger('id_khoahoc');
            $table->foreign('id_nganhhoc')->references('id')->on('nganhhocs');
            $table->foreign('id_khoahoc')->references('id')->on('khoahocs');
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
