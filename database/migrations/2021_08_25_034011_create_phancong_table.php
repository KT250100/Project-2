<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhancongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phancong', function (Blueprint $table) {
            $table->unsignedInteger('id_giaovien');
            $table->unsignedInteger('id_lophoc');
            $table->unsignedInteger('id_monhoc');
            $table->primary(['id_giaovien', 'id_lophoc', 'id_monhoc']);
            $table->foreign('id_giaovien')->references('id')->on('giaovien');
            $table->foreign('id_lophoc')->references('id')->on('lophoc');
            $table->foreign('id_monhoc')->references('id')->on('monhoc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phancong');
    }
}
