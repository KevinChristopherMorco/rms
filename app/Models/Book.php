<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'description',
        'date_published',
        'college',
        'genre',
        'status',
        'stock',
    ];
    protected $dates = ['deleted_at']; //<--- new field to be added in your table

}
