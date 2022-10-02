<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Latihan extends Component
{
    public $nama = "afiv";
    public $show_password = false;
    public function render()
    {
        return view('livewire.latihan');
    }
}
