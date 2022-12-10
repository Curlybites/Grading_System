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
        Schema::create('std_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('regno');
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('sem');
            $table->string('dept');
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
        Schema::dropIfExists('std_registrations');
    }
};
