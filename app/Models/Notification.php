<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
     protected $fillable = [
        'user_id', 'user_type', 'type', 'message', 'event_id', 'is_read'
    ];
}
