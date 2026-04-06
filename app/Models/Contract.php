<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = [
        "designation_id",
        "employee_id",
        "end_date",
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function designation(){
        return $this->belongsTo(Designation::class);
    }
}
