<?php

namespace App\Livewire\Payroll;

use Livewire\Component;

class Index extends Component
{
    public $payroll;
    public function mount(){
        $this->payroll = Payroll::all();
    }
    public function render()
    {
        return view('livewire.payroll.index');
    }
}
