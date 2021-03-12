<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Create extends Component
{
    public $data;

    public function __construct($data)
    {
        return $this->data = $data;
    }

    public function render()
    {
        return view('livewire.create');
    }
}
