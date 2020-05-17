<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('phoneNo')->nullable();
            $table->string('email')->nullable();
            $table->string('telegramLink')->nullable();
            $table->string('whatsAppLink')->nullable();
            $table->string('viberLink')->nullable();
            $table->string('pinterestLink')->nullable();
            $table->string('facebookLink')->nullable();
            $table->string('instaLink')->nullable();
            $table->string('wLink')->nullable();
            $table->string('youtubeLink')->nullable();

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
        Schema::dropIfExists('contacts');
    }
}
