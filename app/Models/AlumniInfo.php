<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniInfo extends Model
{
    use HasFactory;

    protected $table = 'alumni_info';

    protected $fillable = [
        'email',
        'fullname',
        'school_graduated',
        'batch',
        'age',
        'address',
        'gender',
        'profile_pic',
    ];
}
