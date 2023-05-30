<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('key');
            $table->integer('credits');
            $table->unsignedBigInteger('semester_id'); //semestre
            $table->unsignedBigInteger('career_id'); //carrera
            $table->timestamps();

            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete("cascade");
            $table->foreign('career_id')->references('id')->on('careers')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
