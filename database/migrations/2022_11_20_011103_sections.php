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
        Schema::create('sections', function (Blueprint $table){
            
            $table->id();
            $table->string('student_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('age');
            $table->string('gender');
            $table->string('email');
            $table->string('contact_no');
            $table->string('class_sec');
            $table->string('class_subj');
            $table->string('first_grade')->nullable();
            $table->string('second_grade')->nullable();
            $table->string('third_grade')->nullable();
            $table->string('fourth_grade')->nullable();
            $table->string('final')->nullable();
            $table->string('assignment1')->nullable();
            $table->string('assignment2')->nullable();
            $table->string('assignment3')->nullable();
            $table->string('assignment4')->nullable();
            $table->string('assignment5')->nullable();
            $table->string('quiz1')->nullable();
            $table->string('quiz2')->nullable();
            $table->string('quiz3')->nullable();
            $table->string('quiz4')->nullable();
            $table->string('quiz5')->nullable();
            $table->string('exam')->nullable();
            $table->string('activities1')->nullable();
            $table->string('activities2')->nullable();
            $table->string('activities3')->nullable();
            $table->string('activities4')->nullable();
            $table->string('activities5')->nullable();
            $table->string('activities6')->nullable();
            $table->string('activities7')->nullable();
            $table->string('activities8')->nullable();
            $table->string('activities9')->nullable();
            $table->string('activities10')->nullable();
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
       Schema::dropIfExists('sections');
    }
};
