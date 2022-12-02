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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('trackID')->nullable();
            $table->string('strandID')->nullable();
            $table->string('subjectID')->nullable();
            $table->string('subjectName')->nullable();
            $table->string('subjectType')->nullable();
	    	$table->string('subjectUnit')->nullable();
            $table->string('gradeLevel')->nullable();
            $table->string('Semester')->nullable();
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
        Schema::dropIfExists('subjects');
    }
};
