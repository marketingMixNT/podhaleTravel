<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Models\Attraction;
use Livewire\Attributes\Computed;

class Home extends Component
{
    public $title = 'Strona Główna';
    public $description = 'meta desc strona główna';

    #[Computed(persist: true, seconds: 7200)]
    public function getCategoriesProperty()
    {
        return Category::where('type', 'attractions')
            ->withCount('attractions')
            ->having('attractions_count', '>', 0)
            ->orderBy('attractions_count', 'desc')
            ->get();
    }

    #[Computed(persist: true, seconds: 7200)]
    public function getPostsProperty()
    {
        return Post::published()
            ->with('categories') // Eager loading categories
            ->orderBy('published_at', 'desc')
            ->take(4)
            ->get();
    }

    #[Computed(persist: true, seconds: 7200)]
    public function getAttractionsProperty()
    {
        return Attraction::with(['city', 'categories']) // Eager loading city and categories
            ->orderBy('order', 'asc')
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('livewire.home')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}

