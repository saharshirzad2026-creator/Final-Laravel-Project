<?php

namespace App\Livewire\Payment;

use App\Models\Payment;
use Livewire\Component;

class Add extends Component
{
    public $payment;
    public function mount(){
        $this->payment = new Payment();
    }
    public function create(Request $request){
        $request->validate([
            "payment_date"=> "required|dateTime",
            "payment_method"=> "required|string",
            "employee_id"=> "required|integer",
            "payroll_id"=> "required|integer"
        ]);
        $this->payment->create([
            "payment_date"=> $request->pyment_date,
            "payment_method"=> $request->payment_method,
            "employee_id"=> $request->employee_id,
            "payroll_id"=> $request->payroll_id,
        ]);
    }
    public function render()
    {
        return view('livewire.payment.add');
    }
}
