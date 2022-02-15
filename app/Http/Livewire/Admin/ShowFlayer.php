<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ShowFlayer extends Component
{
    public function render()
    {
        return view('livewire.admin.show-flayer')->layout('layouts.admin');
    }
}
