<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('note_id')->nullable();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->timestamps();




            $table->foreign('note_id')->references('id')->on('notes')->onDelete('no action');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
