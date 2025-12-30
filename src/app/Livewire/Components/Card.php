<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Card extends Component
{
    public string $titulo = '';

    public function mount($post)
    {
        $this->titulo = $post->titulo;
    }

    public function render()
    {
        return view('livewire.components.card');
    }
}
