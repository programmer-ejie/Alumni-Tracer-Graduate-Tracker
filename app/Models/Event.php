<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'title',
        'message',
        'date',
        'location',
    ];

     protected $casts = [
        'date' => 'datetime',
    ];


    public function admin()
    {
        return $this->belongsTo(AdminAccount::class, 'admin_id');
    }

    public function alumni(){
        return $this->belongsToMany(AlumniInfo::class, 'alumni_event', 'event_id', 'alumni_id')
            ->withTimestamps()
            ->withPivot('attended_at');
    }

    
}
