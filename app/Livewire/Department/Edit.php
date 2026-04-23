<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $department;
    public function update(Request $request, String $id){
        $this->id = $id;
    }
    public function mount(){
        $this->department = Department::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.department.edit');
    }
}
