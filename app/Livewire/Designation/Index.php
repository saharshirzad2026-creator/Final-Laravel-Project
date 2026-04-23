<?php

namespace App\Livewire\Designation;

use App\Models\Designatio;
use Livewire\Component;

class Index extends Component
{
    public $designation;
    public function mount(){
        $this->designation = Designation::all();
    }
    public function render()
    {
        return view('livewire.designation.index');
    }
}
