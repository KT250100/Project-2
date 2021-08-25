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
            $table->integer('id');
            $table->unsignedInteger('id_monhoc');
            $table->unsignedInteger('id_giaovien');
            $table->unsignedInteger('id_sinhvien');
            $table->tinyInteger('status');
            $table->dateTime('ngaydiemdanh');
            $table->string('note',50);//ghi chú lịch học
            $table->primary(['id', 'id_monhoc', 'id_giaovien', 'id_sinhvien']);
            $table->foreign('id_monhoc')->references('id')->on('monhoc');
            $table->foreign('id_giaovien')->references('id')->on('giaovien');
            $table->foreign('id_sinhvien')->references('id')->on('sinhvien');
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
