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
            $table->string('first_grade');
            $table->string('second_grade');
            $table->string('third_grade');
            $table->string('fourth_grade');
            $table->string('final');
            $table->string('assignment1');
            $table->string('assignment2');
            $table->string('assignment3');
            $table->string('assignment4');
            $table->string('assignment5');
            $table->string('quiz1');
            $table->string('quiz2');
            $table->string('quiz3');
            $table->string('quiz4');
            $table->string('quiz5');
            $table->string('exam');
            $table->string('activities1');
            $table->string('activities2');
            $table->string('activities3');
            $table->string('activities4');
            $table->string('activities5');
            $table->string('activities6');
            $table->string('activities7');
            $table->string('activities8');
            $table->string('activities9');
            $table->string('activities10');
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
