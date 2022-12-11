<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'password',
        'lecturer',
        'email',
        'phone',
        'idno',
        'address',
        'utype',
        'photo',
    ];
}
