<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'book_id',
        'reserve_start',
        'reserve_end',
    ];
}
