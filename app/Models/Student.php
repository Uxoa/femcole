<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentName',
        'studentSurname1',
        'studentSurname2',
        'studentEmail',
        'studentPassword',
        'studentImage',
    ];

}
