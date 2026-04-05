<?php

namespace App\Models;
use App\Models\School;
use App\Models\Designation;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        "name",
        "school_id"
    ];
    public function designations(){
        return $this->hasMany(Designation::class);
    }
    public function school(){
        return $this->belongsTo(School::class);
    }
    public function employees(){
        return $this->hasManyThrough(Employee::class, Designation::class);
    }
}
