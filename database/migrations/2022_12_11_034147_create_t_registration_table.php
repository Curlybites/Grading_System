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
        Schema::create('t_registration', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('lecturer');
            $table->string('email');
            $table->string('phone');
            $table->string('idno');
            $table->string('address');
            $table->string('utype');
            $table->string('photo');
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
        Schema::dropIfExists('t_registration');
    }
};
