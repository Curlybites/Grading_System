<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory;

    protected $fillable = [
        'writtenTask1',
        'writtenTask2',
        'writtenTask3',
        'writtenTask4',
        'writtenTask5',
        'writtenTask6',
        'writtenTask7',
        'writtenTask8',
        'writtenTask9',
        'writtenTask10',
        'performanceTask1',
        'performanceTask2',
        'performanceTask3',
        'performanceTask4',
        'performanceTask5',
        'performanceTask6',
        'performanceTask7',
        'performanceTask8',
        'performanceTask9',
        'performanceTask10',
        'exams',
        'initialGrade',
        'QuarterlyGrade',
        
    ];
}
