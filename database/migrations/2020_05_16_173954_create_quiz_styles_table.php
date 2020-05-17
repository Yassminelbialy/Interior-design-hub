<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_styles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_id')->nullable();
            $table->unsignedBigInteger('style_id')->nullable();

            $table->foreign('quiz_id')->references('id')->on('quizzes');
            $table->foreign('style_id')->references('id')->on('styles');
            $table->softDeletes();
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
        Schema::dropIfExists('quiz_styles');
    }
}
