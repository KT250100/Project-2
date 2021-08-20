<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemdanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemdanh', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_lichday');
            $table->foreign('id_lichday')->references('id')->on('lichday');
            $table->string('rollno',16);
            $table->foreign('rollno')->references('rollno')->on('sinhvien');
            $table->tinyInteger('status');//0 -> vắng, 1 -> đi học
            $table->string('note',200);
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diemdanh');
    }
}
