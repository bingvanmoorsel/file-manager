<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVictoryFilesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('victory_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('extension', 4);
            $table->char('hash', 40);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('victory_files');
    }
}
