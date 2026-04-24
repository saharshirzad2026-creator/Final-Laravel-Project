<?php

namespace App\Livewire\Salary;

use App\Models\Salary;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $salary;
    public function update(Request $request, String $id){
        $this->id = $id;
    }
    public function mount(){
        $this->salary = Salary::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.salary.edit');
    }
}
