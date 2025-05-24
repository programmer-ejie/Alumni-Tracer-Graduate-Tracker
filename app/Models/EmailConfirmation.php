<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailConfirmation extends Model
{
    protected $fillable = ['email', 'code', 'expires_at'];
}
