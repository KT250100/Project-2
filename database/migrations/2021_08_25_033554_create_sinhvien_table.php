<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhvien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname',50);
            $table->string('phone',50);
            $table->string('email')->unique();
            $table->string('address',250);
            $table->date('birthday');
            $table->unsignedInteger('id_lophoc');
            $table->foreign('id_lophoc')->references('id')->on('lophoc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinhvien');
    }
}
