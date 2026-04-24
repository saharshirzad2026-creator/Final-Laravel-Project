<?php

namespace App\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;

class Add extends Component
{
    public $contract;
    public function mount(){
        $this->contract = new Contract();
    }
    public function create(Request $request){
        $request->validate([
            "designation_id"=> "required|integer",
            "employee_id"=> "required|integer",
            "start_date"=> "required|date",
            "end_date"=> "required|date",
            "hire_type"=> "nullable|string"
        ]);
        $this->contract->create([
            "designation_id"=> $request->designation_id,
            "employee_id"=> $request->employee_id,
            "start_date"=> $request->start_date,
            "end_date"=> $request->end_date,
            "hire_type"=> $request->hire_type,
        ]);
    }
    public function render()
    {
        return view('livewire.contract.add');
    }
}
