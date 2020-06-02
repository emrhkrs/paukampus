<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures_teachers', function (Blueprint $table) {
            $table->unsignedBigInteger('lecture_id');
            $table->unsignedBigInteger('teacher_id');

            $table->primary(['lecture_id', 'teacher_id']);

            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('no action');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures_teachers');
    }
}
