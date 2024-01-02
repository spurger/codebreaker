<?php

namespace App\Livewire;

use Livewire\Component;

class EncodeInput extends Component
{
    public $input = '';

    public $output = '';

    public $codeTable = [
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
    ];

    public function encode()
    {
        $uppercase = strtoupper($this->input);
        $this->output = '';
        for ($i = 0; $i < strlen($uppercase); $i++) {
            $value = $this->codeTable[$uppercase[$i]] ?? $this->input[$i];
            if ($value == ' ') {
                $value = '_';
            }
            $this->output .= $value;
        }
    }

    public function shuffleCodeTable()
    {
        $keys = array_keys($this->codeTable);
        $values = array_values($this->codeTable);
        shuffle($values);
        $newCodeTable = [];
        foreach ($keys as $key) {
            $newCodeTable[$key] = array_shift($values);
        }
        $this->codeTable = $newCodeTable;
        $this->input = '';
        $this->encode();
    }

    public function render()
    {
        return view('livewire.encode-input')->with([
            'codeTable' => $this->codeTable,
        ]);
    }
}
