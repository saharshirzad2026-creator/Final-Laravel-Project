<?php

namespace App\Models;
use App\Models\Employee;
use App\Models\Payroll;

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
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function payroll(){
        return $this->belongsTo(Payroll::class);
    }
}
