<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'passport',
        'fname',
        'mname',
        'lname',
        'email',
        'phone',
        'nin',
        'state',
        'lga',
        'address',
        'gender',
        'dob',
        'department',
        'current_session',
        'course',
        'institute',
        'course',
        'level',
        'cgpa',
        'matric_no',
        'status',
    ];
}
