<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorsesTables extends Migration
{
    public function up()
    {
        Schema::create('horses', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('name', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->integer('position')->nullable();
            $table->foreignId('member_id')->unsigned();
        });






    }

    public function down()
    {

        Schema::dropIfExists('horses');
    }
}
