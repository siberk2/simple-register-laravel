<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
    ];

    public static $rules = [
        'username' => 'required|unique:users',
        'password' => 'required|min:8',
    ];

    protected $hidden = [
        'password',
    ];
}