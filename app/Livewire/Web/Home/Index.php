<?php

namespace App\Livewire\Web\Home;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.web')]
    public function render()
    {
        return view('livewire.web.home.index');
    }
}
