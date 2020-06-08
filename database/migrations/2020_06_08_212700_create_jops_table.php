<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jops', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('requirements')->nullable();
            $table->string('jopType')->nullable();
            $table->string('location')->nullable();



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
        Schema::dropIfExists('jops');
    }
}


// $table->id();
// $table->string('title')->nullable();
// $table->string('hint')->nullable();
// $table->string('mainImage')->nullable();
// $table->text('description')->nullable();

// $table->softDeletes();
// $table->timestamps();
// });
