<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    use HasFactory;

    protected $table = 'users1'; // Specify the correct table name

    protected $fillable = [
        'name',
        'email',
        'username',
    ];

    // Disable timestamps if not needed
    public $timestamps = false;
}


