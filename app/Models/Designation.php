<?php

namespace App\Models;
use App\Models\Department;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    //
    protected $fillable = [
        "name",
        "department_id"
    ];
    public function departments(){
        return $this->belongsTo(Department::class);
    }
    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
}
