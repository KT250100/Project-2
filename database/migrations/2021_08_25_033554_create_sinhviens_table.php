<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhviens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('phone',50);
            $table->string('email')->unique();
            $table->string('address',250);
            $table->date('birthday');
            $table->integer('id_lophoc')->nullable()->unsigned();
            $table->foreign('id_lophoc')->references('id')->on('lophocs')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinhviens');
    }
}
