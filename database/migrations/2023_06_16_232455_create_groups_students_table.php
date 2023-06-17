<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_students', function (Blueprint $table) {
            $table->id();
            $table->string('first_grade');
            $table->string('second_grade');
            $table->string('final_grade');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete("cascade");
            $table->foreign('group_id')->references('id')->on('groups')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_students');
    }
}
