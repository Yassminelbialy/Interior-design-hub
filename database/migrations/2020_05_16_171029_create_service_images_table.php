<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_images', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('keyWords')->nullable();


            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('service_images');
    }
}
