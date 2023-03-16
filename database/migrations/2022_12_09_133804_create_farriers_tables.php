<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarriersTables extends Migration
{
    public function up()
    {
        Schema::create('farriers', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('name', 200)->nullable();
            $table->string('phone')->nullable();
            $table->integer('position')->nullable();
            $table->foreignId('member_id')->unsigned();
        });

    }

    public function down()
    {

        Schema::dropIfExists('farriers');
    }
}
