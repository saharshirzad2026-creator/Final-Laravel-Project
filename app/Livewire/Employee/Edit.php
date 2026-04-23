<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $employee;
    public function update(Request $request, String $id){
        $this->id = $id;
    }
    public function mount(){
        $this->employee = Employee::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.employee.edit');
    }
}
