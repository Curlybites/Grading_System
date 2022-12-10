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
        Schema::create('std_registration', function (Blueprint $table) {
            $table->id();
            $table->string('student_no')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('sem')->nullable();
            $table->string('dept')->nullable();
            $table->string('regno')->nullable();
            $table->string('address')->nullable();
            $table->string('utype')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('std_registration');
    }
};
