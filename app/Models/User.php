<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'login',
        'password',
        'role'
    ];
    protected $rules = [
        'login' => ['required', 'string', 'max:255', 'unique:users']
    ];
}
