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
        Schema::create('add_book', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('books_name');
            $table->string('books_image');
            $table->string('books_author_name');
            $table->string('books_publication_name');
            $table->string('books_purchase_date');
            $table->string('books_price');
            $table->string('books_quantity');
            $table->string('books_availability');
            $table->string('librarian_username');
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
        Schema::dropIfExists('add_book');
    }
};
