<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasearches', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->text('desciption');
            $table->text('location');
            $table->text('image')->nullable();
            $table->text('more')->nullable();
            $table->text('date');
            $table->text('company');
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
        Schema::dropIfExists('datasearches');
    }
}
