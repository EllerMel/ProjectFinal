<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('lessonDate');
            $table->time('lessonTime');
            $table->unsignedBigInteger('studentID');
            $table->unsignedBigInteger('horseID');
            $table->unsignedBigInteger('locationID');
            $table->unsignedBigInteger('instructorID');
            $table->string('notes')->nullable();
            $table->boolean('isCanceled')->default(0);
            $table->boolean('isPending')->default(0);
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
        Schema::dropIfExists('lessons');
    }
}
