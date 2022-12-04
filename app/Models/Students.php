<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table ='students';
    protected $primaryKey ='id';

    use HasFactory;

    protected $fillable = [
        'studentID',
        'firstName',
        'lastName',
        'age',
        'gender',
        'contact_no',
        'email',
        'password',
    ];
}
