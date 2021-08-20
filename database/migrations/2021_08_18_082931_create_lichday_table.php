<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichdayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichday', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_name',10);
            $table->string('subject_name',50);
            $table->string('teacher_name',50);
            $table->tinyInteger('frametime');//0 -> t2,4,6; 1 -> t3,5,7
            $table->float('starttime', 8 , 2);//13.5 => 13h30
            $table->float('endtime', 8 , 2);//17.5 => 17h30
            $table->date('startdate');
            $table->date('enddate');
            $table->string('note',50);//ghi chú lịch học
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lichday');
    }
}
