<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use Livewire\Attributes\Computed;

class PostList extends Component
{
    use WithPagination;

    #[Url]
    public $category = '';

    #[Url]
    public $search;

    #[Computed]
    public function getPostsProperty()
    {
        return Post::published()
            ->with('categories')
            ->when($this->category, function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->whereJsonContains('slug', [$this->getCurrentLocale() => $this->category]);
                });
            })
            ->orderBy('published_at', 'desc')
            ->paginate(12);
    }

    #[Computed]
    public function getCategoriesProperty()
    {
        return Category::where('type', 'posts')->get();
    }

    #[Url]
    public function setCategory($slug)
    {
        $this->category = $slug;
        $this->resetPage();
        $this->emitSelf('refreshComponent');
        
    }

    public function getCurrentLocale()
    {
        return app()->getLocale();
    }

    // public function render()
    // {
    //     return view('livewire.post-list', [
    //         'posts' => $this->posts,
    //         'categories' => $this->categories
    //     ]);
    // }
}