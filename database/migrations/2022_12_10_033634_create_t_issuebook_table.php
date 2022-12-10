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
            $table->id();
            $table->string('utype')->nullable();
            $table->string('idno')->nullable();
            $table->string('name')->nullable();
            $table->string('lecturer')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('booksname')->nullable();
            $table->string('bookissuedate')->nullable();
            $table->string('bookreturndate')->nullable();
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
        Schema::dropIfExists('t_issuebook');
    }
};
