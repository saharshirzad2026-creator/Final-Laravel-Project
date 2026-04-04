<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        "payment_date",
        "payment_method",
        "employee_id",
        "payrool_id"
    ];
}
