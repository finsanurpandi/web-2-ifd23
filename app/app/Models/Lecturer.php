<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    // protected $table = 'users';
    protected $fillable = [
        'nidn',
        'address',
        'user_id'
    ];
}
