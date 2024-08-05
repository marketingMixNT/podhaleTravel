<?php

namespace App\Livewire\Blog\Components;

use App\Models\Attraction;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class PostList extends Component
{
    use WithPagination;

    #[Url]
    public $category = '';

    #[Url]
    public $search;

    #[Url]
    public $attraction = "";

    #[Computed]
    public function getPostsProperty()
    {
        return Post::published()
            ->with(['categories', 'attractions'])
            ->when($this->category, function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->whereJsonContains('slug', [$this->getCurrentLocale() => $this->category]);
                });
            })
            ->when($this->attraction, function ($query) {
                $query->whereHas('attractions', function ($query) {
                    $query->whereJsonContains('slug', [$this->getCurrentLocale() => $this->attraction]);
                });
            })


            ->whereRaw('LOWER(title) like ?', ["%" . strtolower($this->search) . "%"])

            ->orderBy('published_at', 'desc')
            ->paginate(7);
     
    }

    #[Computed]
    public function getCategoriesProperty()
    {
        return Category::where('type', 'posts')->get();
    }

    #[Computed]
    public function getAttractionsProperty()
    {
        return Attraction::all();
    }

    public function getFormatedTitle($model)
    {
        $title = str_replace('-', ' ', $model);
        $title = html_entity_decode(strip_tags($title));
        return ucfirst($title);
    }

    
   

    public function getCurrentLocale()
    {
        return app()->getLocale();
    }
}
