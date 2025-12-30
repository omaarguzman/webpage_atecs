<?php

namespace App\Livewire;

use App\Models\Contacto;
use Date;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Contactos extends Component
{
    /* Properties */
    public $nombre;
    public $puesto;
    public $departamento;
    public $telefono;
    public $extension;
    public $email;
    public $fecha_alta;
    public $fecha_baja;
    public $activo;

    public $contactos;

    public function render()
    {
        return view('livewire.contactos')->layout('layouts.app');
    }

    public function mount()
    {
        $this->getAll();
        // echo auth()->user();
        // $this->contactos = Contacto::all();
        // $this->contactos = Contacto::select('id', 'nombre', 'puesto', 'departamento', 'telefono', 'extension', 'email', 'activo')->get()->toArray();
    }

    public function resetFields(){
        $this->nombre = '';
        $this->puesto = '';
        $this->departamento = '';
        $this->telefono = '';
        $this->extension = 0;
        $this->email = '';
        $this->activo = 0;
    }

    public function save()
    {        
        $validated = $this->validate([
            'nombre' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'telefono' => 'required|string|max:10',
            'extension' => 'int',
            'email' => 'required|email',
            'fecha_alta' => 'required|date',
            'fecha_baja' => 'required|date'
        ]);

        try {
            if (
                $validated
            )
            {
                // Create Contacto
                Contacto::create([
                    'id_usuario' => auth()->user()->id,
                    'nombre' => $this->nombre,
                    'puesto' => $this->puesto,
                    'departamento' => $this->departamento,
                    'telefono' => $this->telefono,
                    'extension' => $this->extension,
                    'email' => $this->email,
                    'fecha_alta' => $this->fecha_alta,
                    'fecha_baja' => $this->fecha_baja,
                    'activo' => $this->activo
                ], $validated);
        
                // Set Flash Message
                session()->flash('success','Contacto Created Successfully!!');
                
                // Reset Form Fields After Creating Contacto
                $this->resetFields();
                $this->getAll();

            } else {

            }
        } catch (\Exception $e) {
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating the contacto.');

            // Reset Form Fields After Creating Contacto
            $this->resetFields();
            $this->getAll();
        }
    }

    /**
     * update the contact data
     * @return void
     */
    public function updateContact()
    {
        $this->validate();
        try {
            Contacto::whereId($this->id)->update([
                'nombre' => $this->nombre,
                'puesto' => $this->puesto,
                'departament' => $this->departamento,
                'telefono' => $this->telefono,
                'extension' => $this->extension,
                'email'=> $this->email,
                'fecha_alta' => $this->fecha_alta,
                'fecha_baja'=> $this->fecha_baja,
                'activo'=> $this->activo
            ]);
            session()->flash('success','Contact Updated Successfully!!');
            $this->resetFields();
            $this->getAll();

            $this->updatePost = false;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');

            $this->getAll();
        }
    }

    /**
     * delete specific contact data from the contactos table
     * @param mixed $id
     * @return void
     */
    public function deleteContacto($id)
    {
        try{
            Contacto::find($id)->delete();

            session()->flash('success',"Contact Deleted Successfully!!");

            $this->getAll();
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
            
            $this->getAll();
        }
    }

    /**
     * Get all items of the table
     */
    public function getAll()
    {
        try {
            $this->contactos = Contacto::all();
        } catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }

}
