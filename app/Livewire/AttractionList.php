<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cache;

use App\Models\Tag;
use App\Models\City;
use Livewire\Component;
use App\Models\Category;
use App\Models\Attraction;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Log;

class AttractionList extends Component
{
    use WithPagination;

    #[Url]
    public $category = '';

    #[Url]
    public $tag = '';

    #[Url]
    public $city = '';

    #[Url]
    public $search;



    #[Computed]
    public function getAttractionsProperty()
    {
        return Attraction::with(['categories', 'tags', 'city'])

            ->when($this->category, function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->whereJsonContains('slug', [$this->getCurrentLocale() => $this->category]);
                });
            })
            ->when($this->tag, function ($query) {
                $query->whereHas('tags', function ($query) {
                    $query->whereJsonContains('slug', [$this->getCurrentLocale() => $this->tag]);
                });
            })
            ->when($this->city, function ($query) {
                $query->whereHas('city', function ($query) {
                    $query->whereJsonContains('slug', [$this->getCurrentLocale() => $this->city]);
                });
            })

            ->whereRaw('LOWER(name) like ?', ["%" . strtolower($this->search) . "%"])


            ->orderBy('order', 'desc')->paginate(2);
    }

    #[Computed]
    public function getCategoriesProperty()
    {
        return Category::where('type', 'attractions')->get();
    }

    #[Computed]
    public function getTagsProperty()
    {
        return Tag::all();
    }
    #[Computed]
    public function getCitiesProperty()
    {
        return City::all();
    }

    // #[Computed]
    // public function getCategoriesProperty()
    // {
    //     return Cache::remember('categories', now()->addMinute(), function () {
    //         return Category::where('type', 'attractions')->get();
    //     });
    // }

    // #[Computed]
    // public function getTagsProperty()
    // {
    //     return Cache::remember('tags', now()->addHours(1), function () {
    //         return Tag::all();
    //     });
    // }

    // #[Computed]
    // public function getCitiesProperty()
    // {
    //     return Cache::remember('cities', now()->addHours(1), function () {
    //         return City::all();
    //     });
    // }


    #[Url]
    public function setCategory($slug)
    {
        $this->category = $slug;
        $this->resetPage();
        $this->emitSelf('refreshComponent');
    }



    #[Url]
    public function setTag($slug)
    {
        $this->tag = $slug;
        $this->resetPage();
        $this->emitSelf('refreshComponent');
    }
    #[Url]
    public function setCity($slug)
    {
        $this->city = $slug;
        $this->resetPage();
        $this->emitSelf('refreshComponent');
    }
    

    public function getCurrentLocale()
    {
        return app()->getLocale();
    }

    
}