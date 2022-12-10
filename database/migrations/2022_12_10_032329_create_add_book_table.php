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
            $table->id();
            $table->string('books_name')->nullable();
            $table->string('books_image')->nullable();
            $table->string('books_author_name')->nullable();
            $table->string('books_publication_name')->nullable();
            $table->string('books_purchase_date')->nullable();
            $table->string('books_price')->nullable();
            $table->string('books_quantity')->nullable();
            $table->string('books_availability')->nullable();
            $table->string('librarian_username')->nullable();
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
