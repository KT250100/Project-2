<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemdanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemdanhs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_monhoc');
            $table->unsignedInteger('id_lophoc');
            $table->unsignedInteger('id_giaovien');
            $table->unsignedInteger('id_sinhvien');
            $table->tinyInteger('status');// 0->vắng, 1->đi học, -1->đi muộn, 2->có phép
            $table->dateTime('ngaydiemdanh');
            $table->string('note',50)->nullable();
            $table->foreign('id_monhoc')->references('id')->on('monhocs')->onDelete('cascade');
            $table->foreign('id_lophoc')->references('id')->on('lophocs')->onDelete('cascade');
            $table->foreign('id_giaovien')->references('id')->on('giao_viens')->onDelete('cascade');
            $table->foreign('id_sinhvien')->references('id')->on('sinhviens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diemdanhs');
    }
}
