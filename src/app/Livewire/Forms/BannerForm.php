<?php

namespace App\Livewire\Forms;

use App\Models\Banner;
use Date;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BannerForm extends Form
{
    /**
     * Properties and validations per property
     */
    #[Validate("required|string|max:250")]
    public string $titulo = "";

    #[Validate("required|string")]
    public string $img = "";

    #[Validate("required|date")]
    public Date $fecha_inicio = "";

    #[Validate("required|date")]
    public Date $fecha_fin = "";

    #[Validate("boolean")]
    public bool $activo = false;

    public ?Banner $banner;

    /**
     * SetModel
    */
    public function setBanner(Banner $banner): void
    {
        $this->banner = $banner;
        $this->titulo = $banner->titulo;
        $this->img = $banner->img;
        $this->fecha_inicio = $banner->fecha_inicio;
        $this->fecha_fin = $banner->fecha_fin;
        $this->activo = $banner->activo;
    }

    /**
     * Metodo to save
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(): void
    {
        $this->validate();
        Banner::create($this->all());
        
        $this->reset();
    }

    /**
     * Metodo to detele
     * @return void
     */
    public function delete(): void
    {

    }
    
}
