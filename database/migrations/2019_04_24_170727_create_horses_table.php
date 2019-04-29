<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->string('color');
            $table->string('markings')->nullable();
            $table->string('saddle')->nullable();
            $table->string('bridle')->nullable();
            $table->string('girth')->nullable();
            $table->string('miscTack')->nullable();
            $table->string('pasture')->nullable();
            $table->string('stall')->nullable();
            $table->binary('mainImg')->nullable();
            $table->binary('secondImg')->nullable();
            $table->binary('thirdImg')->nullable();
            $table->binary('fourthImg')->nullable();
            $table->boolean('isInactive')->default(0);
            $table->boolean('isDeleted')->default(0);
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
        Schema::dropIfExists('horses');
    }
}
