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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentID');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
		    $table->string('age');
            $table->string('gender');
            $table->string('dateOfBirth')->nullable();
            $table->string('address')->nullable();
            $table->string('strandID')->nullable();
            $table->string('sectionID')->nullable();
	     	$table->string('contact_no');
            $table->string('schoolLastAttended')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('students');
    }
};
