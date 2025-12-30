<?php

namespace App\Livewire;

use App\Models\Banner;
use Date;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Banners extends Component
{
    use WithFileUploads;

    public $titulo;
    public $img;
    public $fecha_inicio;
    public $fecha_fin; 
    public $activo;

    public $banners;

    public function render()
    {
        return view('livewire.banners')->layout('layouts.app');
    }

    public function mount()
    {
        $this->getAll();
        // $this->banners = Banner::all();
        // $this->banners = Banner::select('id','titulo','img','activo')->get()->toArray();
    }

    public function resetFields(){
        $this->titulo = '';
        $this->fecha_inicio = now();
        $this->fecha_fin = now();
        $this->activo = 0;
    }

 
    public function updatedPhoto()
    {
        $this->validate([
            'img' => 'image|max:1024',
        ]);

    }

    public function save()
    {
        $imgPath = '';
        $newFileName = '';
        $ext = '';

        $validated = $this->validate([
            'titulo' => 'required|string|max:255',
            'img' => 'required|image|max:1024',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);
        
        try {
            if (
                $validated
            )
            {
                $filename = $this->img->getClientOriginalName();
                $newFileName = str_replace('.', '|', $filename);
                $newFileName = explode('|',  $newFileName)[0];
                $newFileName = $newFileName . '-' . now();
                $ext = $this->img->guessExtension();

                $imgPath = '/img/banners/' . $newFileName . '.' . $ext;

                $this->img->storeAs('/banners', $newFileName . '.' . $ext, $disk = 'public');

                // Create Banner
                Banner::create([
                    'id_usuario' => auth()->user()->id,
                    'titulo' => $this->titulo,
                    'img' => $imgPath,
                    'fecha_inicio' => $this->fecha_inicio,
                    'fecha_fin' => $this->fecha_fin,
                    'activo' => $this->activo
                ], $validated);
        
                // Set Flash Message
                session()->flash('success','Banner Created Successfully!!');
                
                // Reset Form Fields After Creating Banner
                $this->resetFields();
                $this->getAll();
            } 
        } catch (\Exception $e) {
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating the banner.');

            // Reset Form Fields After Creating Banner
            $this->resetFields();
            $this->getAll();
        }
    }

    public function deleteBanner($id)
    {
        try{
            Banner::find($id)->delete();
            session()->flash('success',"Banner Deleted Successfully!!");

            $this->getAll();
        } catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");

            $this->getAll();
        }
    }

    public function getAll()
    {
        try {
            $this->banners = Banner::all();

        } catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
