<?php

namespace App\Livewire\Components;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Menu extends Component
{
    public function render(): View
    {
        return view('livewire.components.menu');
    }
}
