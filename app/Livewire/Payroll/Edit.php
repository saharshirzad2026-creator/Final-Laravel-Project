<?php

namespace App\Livewire\Payroll;

use App\Models\Payroll;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $payroll;
    public function update(Request $request, String $id){
        $this->id = $id;
    }
    public function mount(){
        $this->payroll = Payroll::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.payroll.edit');
    }
}
