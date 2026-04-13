<?php

namespace App\Livewire;

use Livewire\Component;

class Fq extends Component
{
    public $faqs = [
        [
        "question" => "What is Austad Sharifi High School?",
        "answer" => "Austad Sharifi High School is a governmental (public) school that provides education based on Afghanistan's national curriculum.",
        ],
         [
            "question" => "Who was the school named after?",
            "answer" => "The school is named in honor of Ramazan Ali Sharifi for his contributions to education and the Hazara community.",
        ],
        [
            "question" => "Is the School public or private?",
            "answer" => "It is a public (government-run) school."
        ],
         [
            "question" => "What grades are taught?",
            "answer" => "The school offers classes from primary to high school levels, depending on its structure."
        ],
        [
            "question" => "Is education free?",
            "answer" => "Yes, educantion is generally free as it is a government school."
        ],
         [
            "question" => "What curriculum is followed?",
            "answer" => "The school follows the official curriculum set by the ministry of education of Afghanistan."
        ],
        [
            "question" => "Who can enroll?",
            "answer" => "Students from the local area who meet age and grade requirements can enroll."
        ],
         [
            "question" => "Are Teachers qualified?",
            "answer" => "Yes, teachers are appointed according to government standards."
        ],
    ];

 public $questionIndex = null;
    public function toggle($index){
        if($this->questionIndex === $index){
            $this->questionIndex = null;
        }
        else{
            $this->questionIndex = $index;
        }
 }

    public function render()
    {
        return view('livewire.fq');
    }
}
