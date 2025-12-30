<?php

namespace App\Livewire;

use App\Models\Banner;
use Livewire\Component;

class Test extends Component
{

    public $mensaje = 'Hola mundo desde Livewire';

    public function render()
    {
        return view('livewire.test');
    }

    public function mount()
    {
        try {
            $this->banners = Banner::count();

            $this->mensaje = "Hay " . $this->banners . " banners registrados.";

        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong!!");
        }
    }
}
