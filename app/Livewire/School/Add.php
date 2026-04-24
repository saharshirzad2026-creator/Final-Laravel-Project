<?php

namespace App\Livewire\School;
use Illuminate\Http\Livewire\Request;

use App\Models\School;
use Livewire\Component;

class Add extends Component
{
    public $school;
    public function mount(){
        $school = new School();
    }
    public function create(Request $request){
        $request->validate([
            "name"=> "required|string|min:3",
            "whatsApp_link"=> "required|string",
        ]);
        $this->school->create([
            "name"=> $request->name,
            "whatsApp_link"=> $request->whatsApp_link,
        ]);
    }
    public function render()
    {
        return view('livewire.school.add');
    }
}
