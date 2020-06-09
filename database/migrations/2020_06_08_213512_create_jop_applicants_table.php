<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJopApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jop_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('age')->nullable();
            $table->unsignedBigInteger('salary')->nullable();
            $table->unsignedBigInteger('jop_id')->nullable();
            $table->string('cv')->nullable();
            $table->string('urlProtofolio')->nullable();
            $table->string('phone')->nullable();

            $table->foreign('jop_id')->references('id')->on('jops');
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
        Schema::dropIfExists('jop_applicants');
    }
}


// $table->string('image')->nullable();
// $table->string('description')->nullable();
// $table->unsignedBigInteger('project_id')->nullable();
// $table->string('keyWords')->nullable();


// $table->foreign('project_id')->references('id')->on('projects');
// $table->softDeletes();
// $table->timestamps();
