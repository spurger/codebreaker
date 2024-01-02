<?php

namespace App\Livewire;

use Livewire\Component;

class EncodeInput extends Component
{
    public $input = '';

    public $output = '';

    public function encode()
    {
        $this->output = 'Not yet implemented.';
    }

    public function render()
    {
        return view('livewire.encode-input');
    }
}
