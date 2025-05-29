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

    public function admin()
    {
        return $this->belongsTo(AdminAccount::class, 'admin_id');
    }
}
