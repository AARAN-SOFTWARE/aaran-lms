<?php

namespace Aaran\Docs\Livewire\Prologue;

use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;


class ReleaseNotes extends Component
{

    public function getDocs(){

        $md = (__DIR__ . '/../../Markdown/1.x/prologue/release.md');

        return Str::markdown(file_get_contents($md));
    }

    #region[render]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('docs::Prologue.release')->with([
            'docs' => $this->getDocs()
        ]);
    }
    #endregion
}
