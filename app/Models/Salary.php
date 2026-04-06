<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Payroll;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    //
    protected $fillable = [
        "gross_salary",
        "employee_id",
        "payroll_id"
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function payroll(){
        return $this->belongsTo(Payroll::class);
    }
}
