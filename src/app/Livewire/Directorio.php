<?php

namespace App\Livewire;

use App\Models\Contacto;
use Livewire\Component;

class Directorio extends Component
{
    public $contactos;

    
    public function render()
    {
        return view('livewire.directorio');
    }

    public function mount()
    {
        $this->contactos = Contacto::all();
    }
}
