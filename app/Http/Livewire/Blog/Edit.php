<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class Edit extends Component
{
    public $content;

    public function mount($content){
        $this->content = $content;
    }

    public function render()
    {
        return view('livewire.blog.edit');
    }
}
