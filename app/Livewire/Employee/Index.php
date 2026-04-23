<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class Index extends Component
{
    public $employee;
    public function mount(){
        $this->employee = Employee::all();
    }
    public function render()
    {
        return view('livewire.employee.index');
    }
}
