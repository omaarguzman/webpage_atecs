<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Date;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    /**
     * Properties and validations for property
     */
    #[Validate("required|string|max:255")]
    public string $titulo = "";

    #[Validate("required|string")]
    public string $contenido = "";

    #[Validate("required|date")]
    public Date $fecha_inicio = "";

    #[Validate("required|date")]
    public Date $fecha_fin = "";

    #[Validate("boolean")]
    public bool $activo = false;

    public ?Post $post;

    /**
     * SetModel
    */
    public function setPost(Post $post): void
    {
        $this->post = $post;
        $this->titulo = $post->titulo;
        $this->contenido = $post->contenido;
        $this->fecha_inicio = $post->fecha_inicio;
        $this->fecha_fin = $post->fecha_fin;
        $this->activo = $post->activo;
    }

    /**
     * Metodo to save
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(): void
    {
        $this->validate();
        Post::create($this->all());
        
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
