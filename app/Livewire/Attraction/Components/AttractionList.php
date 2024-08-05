<?php

namespace App\Livewire\Attraction\Components;

use App\Models\Tag;
use App\Models\City;
use Livewire\Component;
use App\Models\Category;
use App\Models\Attraction;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

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


            ->orderBy('order', 'desc')->paginate(4);
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

   


    // #[Url]
    // public function setCategory($slug)
    // {
    //     $this->category = $slug;
    //     $this->resetPage();
    //     $this->emitSelf('refreshComponent');
    // }



    // #[Url]
    // public function setTag($slug)
    // {
    //     $this->tag = $slug;
    //     $this->resetPage();
    //     $this->emitSelf('refreshComponent');
    // }
    // #[Url]
    // public function setCity($slug)
    // {
    //     $this->city = $slug;
    //     $this->resetPage();
    //     $this->emitSelf('refreshComponent');
    // }

    public function getFormatedTitle($model)
    {
        $title = str_replace('-', ' ', $model);
        return ucwords($title);
    }
    

    public function getCurrentLocale()
    {
        return app()->getLocale();
    }
}
