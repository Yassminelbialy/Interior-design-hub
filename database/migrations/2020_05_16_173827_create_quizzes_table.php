<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('design_id')->nullable();
            $table->unsignedFloat('area')->nullable();
            $table->string('styles')->nullable();
            $table->string('timeOfRsponse')->nullable();
            $table->string('participateState')->nullable();
            $table->string('contactTybe')->nullable();
            $table->string('customerName')->nullable();
            $table->string('customerPhoneNo')->nullable();

            $table->string('design')->nullable();
            // $table->unsignedBigInteger('category_id')->nullable();
            // $table->foreign('design_id')->references('id')->on('designs');

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
        Schema::dropIfExists('quizzes');
    }
}
