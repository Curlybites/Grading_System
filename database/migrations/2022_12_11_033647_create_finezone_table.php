<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finezone', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('username');
            $table->string('utype');
            $table->string('email');
            $table->string('booksname');
            $table->string('fine');
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
        Schema::dropIfExists('finezone');
    }
};
