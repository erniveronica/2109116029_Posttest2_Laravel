<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table ='review';

    // Protected yang dijaga
    protected $guarded = [];

    //menonaktifkan timestaps default (bawaan laravel)
    public $timestamps = false;
}
