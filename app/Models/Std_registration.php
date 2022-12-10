<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Std_registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_no',
        'name',
        'last_name',
        'age',
        'gender',
        'contact_no',
        'email',
    ];
}
