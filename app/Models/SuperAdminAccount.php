<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuperAdminAccount extends Model
{
     protected $fillable = [
        'email',
        'password',
        'fullname',
        'phone',
        'gender',
        'address',
        'github',
        'twitter',
        'instagram',
        'facebook',
        'profile_pic'
    ];
    protected $hidden = ['password'];
}
