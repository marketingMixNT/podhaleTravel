<?php

namespace App\Livewire;

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
        return Attraction::with('categories', 'tags','city')

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
                $query->where('city_id', $this->city);
            })
            
            ->whereRaw('LOWER(name) like ?', ["%" . strtolower($this->search) . "%"])
            

            ->paginate(5);
    }

    #[Computed]
    public function getCategoriesProperty()
    {
        return Category::all();
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
    public function setCity($id)
    {
        $this->city = $id;
        $this->resetPage();
        $this->emitSelf('refreshComponent');
    }

    public function getCurrentLocale()
    {
        return app()->getLocale();
    }

 

    // public function render()
    // {
    //     return view('livewire.attraction-list',[
    //         'attractions' => $this->attractions,
    //         'categories' => $this->categories,
    //         'tags' => $this->tags
    //     ]);
    // }
}
