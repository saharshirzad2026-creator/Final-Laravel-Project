<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    //
    protected $fillable = [
        "gross_salary",
        "employee_id",
        "payroll_id"
    ];
}
