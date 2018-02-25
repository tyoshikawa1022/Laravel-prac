<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $guarded = ['id'];

    protected $fillable = [
        'name', 'tel', 'email', 'gender', 'content'
    ];
}
