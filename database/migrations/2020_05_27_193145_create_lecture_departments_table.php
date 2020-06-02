<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_departments', function (Blueprint $table) {

            $table->unsignedBigInteger('lecture_id');
            $table->unsignedBigInteger('department_id');

            $table->primary(['lecture_id', 'department_id']);

            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('no action');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('no action');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecture_departments');
    }
}
