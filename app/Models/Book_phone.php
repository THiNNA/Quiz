<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_phone extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'bp_name',
        'bp_tel',
        'bp_addr',
        'bp_img',

    ];
    protected $table= 'book_phone';
}
