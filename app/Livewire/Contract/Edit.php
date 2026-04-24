<?php

namespace App\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $contract;
    public function update(Request $request, String $id){
        $this->id = $id;
    }
    public function mount(){
        $this->contract = Contract::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.contract.edit');
    }
}
