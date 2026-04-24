<?php

namespace App\Livewire\School;

use App\Models\School;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public $schoolData;
    public function update(Request $request, String $id){
        $this->id = $id;
    }
    public function mount(){
        $this->schoolData = School::findOrFail($this->id);
    }
    public function render()
    {
        return view('livewire.school.edit');
    }
}
