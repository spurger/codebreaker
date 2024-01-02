<?php

namespace App\Livewire;

use Livewire\Component;

class EncodeInput extends Component
{
    public $input = '';

    public $output = '';

    protected $codeTable = [
        'A' => '☀',
        'B' => '☁',
        'C' => '☂',
        'D' => '★',
        'E' => '☎',
        'F' => '☑',
        'G' => '☛',
        'H' => '☾',
        'I' => '♫',
        'J' => '♻',
        'K' => '⚀',
        'L' => '⚑',
        'M' => '⚒',
        'N' => '⚖',
        'O' => '⚠',
        'P' => '⚫',
        'Q' => '⚽',
        'R' => '⛄',
        'S' => '⛔',
        'T' => '⛟',
        'U' => '⛴',
        'V' => '©',
        'W' => '↢',
        'X' => '⌨',
        'Y' => '⏎',
        'Z' => '⏭',
        ' ' => '_',
    ];

    public function encode()
    {
        $uppercase = strtoupper($this->input);
        $this->output = '';
        for ($i = 0; $i < strlen($uppercase); $i++) {
            $value = $this->codeTable[$uppercase[$i]] ?? $this->input[$i];
            $this->output .= $value;
        }
    }

    public function render()
    {
        return view('livewire.encode-input');
    }
}
