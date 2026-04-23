<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;

class Index extends Component
{
    public $department;
    public function mount(){
        $this->department = Department::all();
    }
    public function render()
    {
        return view('livewire.department.index');
    }
}
