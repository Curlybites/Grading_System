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
        Schema::create('faculties', function (Blueprint $table) {
                $table->id();
                $table->string('facultyID')->nullable();
                $table->string('firstName');
                $table->string('lastName');
                $table->string('middleName')->nullable();
                $table->string('gender');
                $table->string('username')->nullable();
                $table->string('password')->nullable();
                $table->string('department')->nullable();
                $table->string('email')->nullable();
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
        Schema::dropIfExists('faculties');
    }
};
