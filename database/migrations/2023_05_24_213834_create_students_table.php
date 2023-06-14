<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');        
            $table->string('number_control');
            $table->text('address');
            $table->date('birthdate');
            $table->string('gender'); //genero
            $table->Integer('phone');
            $table->double('average'); //promedio
            $table->string('status');
            $table->string('photo');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('career_id');
            $table->unsignedBigInteger('semester_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
            $table->foreign('career_id')->references('id')->on('careers')->onDelete("cascade");
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
