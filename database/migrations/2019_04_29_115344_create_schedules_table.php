<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('lessonDate');
            $table->time('lessonTime');
            $table->integer('studentID')->unsigned();
            $table->integer('horseID')->unsigned();
            $table->string('location');
            $table->integer('instructorID')->unsigned();
            $table->string('notes')->nullable();
            $table->boolean('isCanceled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
