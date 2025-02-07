<?php

namespace App\Livewire\Web\Contact;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.web.contact.index');
    }
}
