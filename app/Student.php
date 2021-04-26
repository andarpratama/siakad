<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nim', 'name','image', 'majors_id', 'gender', 'email', 'address', 'handphone', 'religion', 'placeofbirth', 'dateofbirth'
    ];

    protected $hidden = [];
}
