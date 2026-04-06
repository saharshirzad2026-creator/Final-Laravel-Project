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
    public function designation(){
        return $this->belongsTo(Designation::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
    public function salaries(){
        return $this->hasMany(Salary::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
