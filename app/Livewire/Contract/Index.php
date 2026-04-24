<?php

namespace App\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;

class Index extends Component
{
    public $contract;
    public function mount(){
        $this->contract = Contract::all();
    }
    public function render()
    {
        return view('livewire.contract.index');
    }
}
