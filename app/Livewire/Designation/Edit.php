<?php

namespace App\Livewire\Designation;

use App\Models\Designation;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $designation;
    public function update(Request $request, String $id){
        $this->id = $id;
    }
    public function mount(){
        $this->designation = Designation::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.designation.edit');
    }
}
