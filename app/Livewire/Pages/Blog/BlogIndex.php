<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;

class BlogIndex extends Component
{

    public $title = 'Wszystkie posty';
    public $description = 'meta postów';
    public function render()
    {
        return view('livewire.pages.blog.blog-index')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);;
    }
}
