<?php

namespace App\Livewire\Payroll;

use App\Models\Payroll;
use Livewire\Component;

class Add extends Component
{
    public $payroll;
    public function mount(){
        $this->payroll = new Payroll();
    }
    public function create(Request $request){
        $request->validate([
            "year"=> "required|string",
            "month"=> "required|integer",
            "school_id"=> "required|integer",
        ]);
        $this->payroll->create([
            "year"=> $request->year,
            "month"=> $request->month,
            "school_id"=> $request->school_id,
        ]);
    }
    public function render()
    {
        return view('livewire.payroll.add');
    }
}
