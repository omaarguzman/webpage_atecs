<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class AllPosts extends Component
{
    public $posts, $post;

    
    public function render()
    {
        return view('livewire.all-posts');
    }

    public function mount()
    {
        $this->posts = Post::all();
    }

}
