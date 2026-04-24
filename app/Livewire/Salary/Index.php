<?php

namespace App\Livewire\Salary;

use Livewire\Component;

class Index extends Component
{
    public $salary;
    public function mount(){
        $this->salary = Salary::all();
    }
    public function render()
    {
        return view('livewire.salary.index');
    }
}
