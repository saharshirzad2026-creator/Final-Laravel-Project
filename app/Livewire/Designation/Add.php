<?php

namespace App\Livewire\Designation;

use App\Models\Designation;
use Livewire\Component;

class Add extends Component
{
    public $designation;
    public function mount(){
        $this->designation = new Designation();
    }
    public function create(Request $request){
        $request->validate([
            "name"=> "required|string|min:3",
            "department_id"=> "required|integer"
        ]);
        $this->designation->create([
            "name"=> $request->name,
            "department_id"=> $request->department_id
        ]);
    }
    public function render()
    {
        return view('livewire.designation.add');
    }
}
