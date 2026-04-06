<?php

namespace App\Models;
use App\Models\Department;
use App\Models\Payroll;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        "name",
        "whatsapp_link",
    ];
    public function users(){
        return $this->belongsTo(User::class,"schoolusers");
    }
    public function departments(){
        return $this->hasMany(Department::class);
    }
    public function payrolls(){
        return $this->hasMany(Payroll::class);
    }
    public function designations(){
        return $this->through("departments")->has("designations");
    }
}
