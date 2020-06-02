<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('description',200);
            $table->decimal('price',6,2);

            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lecture_id');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();



            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('no action');
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
        Schema::dropIfExists('notes');
    }
}
