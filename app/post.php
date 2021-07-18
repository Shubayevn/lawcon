<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
//    use HasFactory;

    protected $fillable = [
        'title', 'description'
    ];
}
