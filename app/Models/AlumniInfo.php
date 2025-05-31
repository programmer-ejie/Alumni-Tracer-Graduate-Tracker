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
        'github',
        'twitter',
        'instagram',
        'facebook',
        'profile_pic'
    ];

     public function events(){
        return $this->belongsToMany(Event::class, 'alumni_event', 'alumni_id', 'event_id')
            ->withTimestamps()
            ->withPivot('attended_at');
    }

    public function connections(){
        return $this->belongsToMany(AlumniInfo::class, 'alumni_connections', 'alumni_id', 'connection_id');
    }
}
