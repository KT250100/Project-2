<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhancongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phancongs', function (Blueprint $table) {
            $table->unsignedInteger('id_giaovien')/*->unique()*/;
            $table->unsignedInteger('id_lophoc');
            $table->unsignedInteger('id_monhoc');
            $table->text('ca_day')->nullable();
            $table->time('starttime')->nullable();
            $table->time('endtime')->nullable();
            $table->date('enddate')->nullable();
            $table->primary(['id_giaovien', 'id_lophoc', 'id_monhoc']);
            $table->foreign('id_giaovien')->references('id')->on('giao_viens')->onDelete('cascade');
            $table->foreign('id_lophoc')->references('id')->on('lophocs')->onDelete('cascade');
            $table->foreign('id_monhoc')->references('id')->on('monhocs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phancongs');
    }
}
