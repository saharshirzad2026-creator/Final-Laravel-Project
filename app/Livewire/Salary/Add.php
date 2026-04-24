<?php

namespace App\Livewire\Salary;

use Livewire\Component;

class Add extends Component
{
    public $salary;
    public function mount(){
        $this->salary = new Salary();
    }
    public function create(Request $request){
        $request->validate([
            "gross_salary"=> "required|integer",
            "employee_id"=> "required|integer",
            "payroll_id"=> "required|integer"
        ]);
        $this->salary->create([
            "gross_salary"=> $request->gross_salary,
            "employee_id"=> $request->employee_id,
            "payroll_id"=> $request->payroll_id
        ]);
    }
    public function render()
    {
        return view('livewire.salary.add');
    }
}
