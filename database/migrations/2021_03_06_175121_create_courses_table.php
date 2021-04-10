<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    //migration
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('crn');
            $table->string('subject');
            $table->integer('course');
            $table->string('section');
            $table->integer('campus_id');
            $table->double('credits');
            $table->string('title');
            $table->string('days');
            $table->string('time');
            $table->integer('capacity');
            $table->integer('section_actual');
            $table->integer('section_remaining');
            $table->integer('user_id');
            $table->string('date');
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
