<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThewordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thewords', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('kata'); // Column for the word
            $table->dateTime('created_at'); // Column for the word
            $table->dateTime('updated_at'); // Column for the word

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thewords');
    }
}
