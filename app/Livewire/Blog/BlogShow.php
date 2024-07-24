<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Computed;

class BlogShow extends Component
{

    public $slug;

    public $post;
    public $latestPosts;


    public $description = 'meta postów';


    public function mount($slug)
    {
        $this->slug = $slug;
        $this->loadPost();
        $this->latestPosts = $this->getLatestPosts();
    }


    public function loadPost()
    {
        $this->post = Post::with('categories')->where('slug->pl', $this->slug)->firstOrFail();
    }


    #[Computed(persist: true)]
    public function getLatestPosts()
    {
        $posts = Post::published()->orderByDesc('published_at')->take(4)->get();

        $filteredPosts = $posts->filter(function ($p) {
            return $p->id !== $this->post->id;
        });

        return $filteredPosts->take(3);
    }
    public function render()
    {
        return view('livewire.blog.blog-show', [
            'post' => $this->post,
            'latestPosts' => $this->latestPosts,
        ])->layout('components.layouts.app', [
            'title' => $this->post->title,
            'description' => $this->description
        ]);
    }
}
