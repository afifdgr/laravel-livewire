<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Latihan extends Component
{
    public $keranjang = 0;
    public function render()
    {
        return view('livewire.latihan');
    }

    public function tambah()
    {
        $this->keranjang++;
    }

    public function kurang()
    {
        $this->keranjang--;
    }
}
