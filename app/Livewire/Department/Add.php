<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;

class Add extends Component
{
    public $department;
    public function mount(){
        $this->department = new Department();
    }
    public function create(Request $request){
        $request->validate([
            "name"=> "required|string|min:3",
            "school_id"=> "required|integer"
        ]);
        $this->department->create([
            "name"=> $request->name,
            "school_id"=> $request->school_id,
        ]);
    }
    public function render()
    {
        return view('livewire.department.add');
    }
}
