<?php

namespace App\Livewire\Forms;

use App\Models\Contacto;
use Date;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactoForm extends Form
{
    /**
     * Properties and validations per property
     */
    #[Validate("required|string")]
    public string $nombre = "";

    #[Validate("required|string")]
    public string $puesto = "";

    #[Validate("required|string")]
    public string $departamento = "";

    #[Validate("required|string")]
    public string $telefono = "";

    #[Validate("required|number")]
    public int $extension = 0;

    #[Validate("required|string|email")]
    public string $email = "";

    #[Validate("required|date")]
    public Date $fecha_alta;

    #[Validate("required|date")]
    public Date $fecha_baja;

    #[Validate("boolean")]
    public bool $activo = false;

    public ?Contacto $contacto;

    /**
     * SetModel
    */
    public function setContacto(Contacto $contacto): void
    {
        $this->contacto = $contacto;
        $this->nombre = $contacto->nombre;
        $this->puesto = $contacto->puesto;
        $this->departamento = $contacto->departamento;
        $this->telefono = $contacto->telefono;
        $this->extension = $contacto->extension;
        $this->email = $contacto->email;
        $this->fecha_alta = $contacto->fecha_alta;
        $this->fecha_baja = $contacto->fecha_baja;
        $this->activo = $contacto->activo;
    }

    /**
     * Metodo to save
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(): void
    {
        $this->validate();

        Contacto::create($this->all());
        
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
