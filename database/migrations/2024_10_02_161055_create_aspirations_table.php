<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirationsTable extends Migration
{
    public function up()
    {
        Schema::create('aspirations', function (Blueprint $table) {
            $table->id();
            $table->string('message', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aspirations');
    }
}
