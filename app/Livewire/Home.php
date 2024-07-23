<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Models\Attraction;

class Home extends Component
{


    public $title = 'Strona Główna';
    public $description = 'meta desc strona główna';
    public $categories;
    public $posts;
    public $attractions;

    public function mount()
    {

        $this->categories =  Category::where('type', 'attractions')
            ->withCount('attractions')
            ->having('attractions_count', '>', 0)
            ->orderBy('attractions_count', 'desc')
            ->get();
        $this->posts = Post::published()->with('categories')->orderBy("published_at", "desc")->take(4)->get();
        $this->attractions = Attraction::take(4)->orderBy("order", "asc")->get();
    }

    

    public function render()
    {
        return view('livewire.home')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);;
    }
}
