<?php

namespace App\Livewire;

use App\Models\Post;
use Date;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use \EditorJS\EditorJS;


class Posts extends Component
{

    use WithFileUploads;

    // #[Validate('required', message: 'Please provide the title.')]
    // #[Validate('max:255')]
    public $titulo;
    public $descripcion;
    public $img;
    public $contenido;
    public $fecha_inicio;
    public $fecha_fin;
    public $activo;

    public $posts;

    public function render()
    {
        return view('livewire.posts')->layout('layouts.app');
    }

    public function mount()
    {
        $this->getAll();
        // $this->posts = Post::all();
        // $this->posts = Post::select('id', 'titulo', 'contenido', 'fecha_inicio', 'fecha_fin', 'activo')->get()->toArray();
    }

    public function resetFields(){
        $this->titulo = '';
        $this->descripcion = '';
        $this->contenido = '';
        $this->fecha_inicio = new date();
        $this->fecha_fin = new date();
        $this->activo = 0;
    }

    public function updatedPhoto()
    {
        $this->validate([
            'img' => 'image|max:1024',
        ]);

    }

    public function store()
    {
        $imgPath = '';
        $newFileName = '';
        $ext = '';

        $validated = $this->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'img' => 'required|image',
            // 'contenido'=> 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date'
        ]);
        
        try {
            // Validate Form Request
            if (
                $validated
            )
            {
                $filename = $this->img->getClientOriginalName();
                $newFileName = str_replace('.', '|', $filename);
                $newFileName = explode('|',  $newFileName)[0];
                $newFileName = $newFileName . '-' . now();
                $ext = $this->img->guessExtension();

                $imgPath = '/img/posts/' . $newFileName . '.' . $ext;

                $this->img->storeAs('/posts', $newFileName . '.' . $ext, $disk = 'public');

                // Create Post
                Post::create([
                    'id_usuario' => auth()->user()->id,
                    'titulo' => $this->titulo,
                    'descripcion' => $this->descripcion,
                    'img' => $imgPath,
                    'contenido' => $this->contenido,
                    'fecha_inicio' => $this->fecha_inicio,
                    'fecha_fin' => $this->fecha_fin,
                    'activo' => $this->activo
                ], $validated);
        
                // Set Flash Message
                session()->flash('success','Post Created Successfully!!');
                
                // Reset Form Fields After Creating Post
                $this->resetFields();
                $this->getAll();
            }
        } catch (\Exception $e) {
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating the post.');

            // Reset Form Fields After Creating Post
            $this->resetFields();
            $this->getAll();
        }
    }

    public function deletePost($id)
    {
        try{
            Post::find($id)->delete();

            session()->flash('success',"Post Deleted Successfully!!");

            $this->getAll();
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");

            $this->getAll();
        }
    }

    public function getAll()
    {
        try {
            $this->posts = Post::all();
        } catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
