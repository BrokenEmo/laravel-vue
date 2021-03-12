<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Polls extends Component
{

    public $data;

    public function __construct($data)
    {
        return $this->data = $data;
    }

    public function render()
    {
        return view('livewire.polls');
    }
}