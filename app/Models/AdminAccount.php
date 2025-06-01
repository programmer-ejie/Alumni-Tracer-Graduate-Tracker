<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminAccount extends Model
{
   protected $fillable = [
        'email',
        'password',
        'fullname',
        'phone',
        'school_id',
        'gender',
        'address',
        'github',
        'twitter',
        'instagram',
        'facebook',
        'profile_pic'
    ];
    protected $hidden = ['password'];

    public function school(){
            return $this->belongsTo(School::class);
        }
}
