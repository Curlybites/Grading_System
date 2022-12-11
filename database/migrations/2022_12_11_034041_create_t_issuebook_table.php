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
        Schema::create('t_issuebook', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('utype');
            $table->string('idno');
            $table->string('name');
            $table->string('lecturer');
            $table->string('phone');
            $table->string('email');
            $table->string('booksname');
            $table->string('booksissuedate');
            $table->string('booksreturndate');
            $table->string('username');
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
        Schema::dropIfExists('t_issuebook');
    }
};
