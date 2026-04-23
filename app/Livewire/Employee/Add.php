<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class Add extends Component
{
    public $employee;
    public function mount(){
        $this->employee = new Employee();
    }
    public function create(Request $request){
        $request->validate([
            "name"=> "required|string|min:3|max:20",
            "lastName"=> "required|string|min:3|max:20",
            "tazkira"=> "required|string",
            "gender"=> "required|string",
            "email"=> "required|string|min:20",
            "phoneNumber"=> "required|string|min:10|max:10",
            "designation_id"=> "required|integer",
        ]);
        $this->employee->create([
            "name"=> $request->name,
            "lastName"=> $request->lastName,
            "tazkira"=> $request->tazkira,
            "gender"=> $request->gender,
            "email"=> $request->email,
            "phoneNumber"=> $request->phoneNumber,
            "designation_id"=> $request->designation_id,
        ]);
    }
    public function render()
    {
        return view('livewire.employee.add');
    }
}
