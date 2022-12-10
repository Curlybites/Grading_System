<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std_registrations extends Model
{
    use HasFactory;
    protected $fillable = [
        'regno',
        'name',
        'username',
        'email',
        'password',
        'phone',
        'sem',
        'dept',
        'address',
        'utype',
        'photo',
    ];
}
