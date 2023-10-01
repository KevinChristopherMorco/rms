<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birthdate',
        'gender',
        'card_number',
        'email',
        'house_no',
        'barangay',
        'city_municipality',
        'province',
        'user_type',
        'password',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
