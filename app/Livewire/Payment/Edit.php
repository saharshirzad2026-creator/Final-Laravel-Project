<?php

namespace App\Livewire\Payment;

use App\Models\Payment;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $payment;
    public function updat(Request $request, String $id){
        $this->id = $id;
    }
    public function mount(){
        $this->payment = Payment::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.payment.edit');
    }
}
