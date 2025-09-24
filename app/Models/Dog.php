<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = 'dogs';
    protected $fillable = ['nombre'];
    protected $timestamps = false;
}
