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
            $table->id();
            $table->string('utype')->nullable();
            $table->string('regno')->nullable();
            $table->string('name')->nullable();
            $table->string('sem')->nullable();
            $table->string('dept')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('booksname')->nullable();
            $table->string('booksissuedate')->nullable();
            $table->string('booksreturndate')->nullable();
            $table->string('username')->nullable();
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
