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
        Schema::create('issue_book', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('utype');
            $table->string('regno');
            $table->string('name');
            $table->string('sem');
            $table->string('dept');
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
        Schema::dropIfExists('issue_book');
    }
};
