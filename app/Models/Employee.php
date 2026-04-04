<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        "firstName",
        "tazkira",
        "eamil",
        "designation_id"
    ];
}
