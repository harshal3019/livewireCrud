<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{

    public $name;
    public $message;
    public $martial_status;
    public $colors=[];
    public $fruits;

    public function render()
    {
        return view('livewire.form');
    }
}
