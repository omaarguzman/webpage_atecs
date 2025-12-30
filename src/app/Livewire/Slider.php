<?php

namespace App\Livewire;

use App\Models\Banner;
use Livewire\Component;

class Slider extends Component
{
    public $banners;

    public function mount()
    {
        $this->banners = Banner::all();
    }

    public function render()
    {
        return view('livewire.slider');
    }
}
