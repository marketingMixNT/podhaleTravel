<?php

namespace App\Livewire\Pages\Attraction;

use Livewire\Component;
use App\Models\Attraction;

class AttractionShow extends Component
{
    public $slug;
    public $attraction;
    public $similarAttractions;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->loadAttraction();
    }

    public function loadAttraction()
    {
        $this->attraction = Attraction::with(['categories', 'posts' => function($query) {
            $query->orderBy('published_at', 'desc')->take(3);
        }])->where('slug->pl', $this->slug)->firstOrFail();

        $categoryIds = $this->attraction->categories->pluck('id');
        $this->similarAttractions = Attraction::with('categories')->whereHas('categories', function ($query) use ($categoryIds) {
            $query->whereIn('categories.id', $categoryIds);
        })
            ->where('id', '!=', $this->attraction->id)
            ->take(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.attraction.attraction-show', [
            'attraction' => $this->attraction,
            'similarAttractions' => $this->similarAttractions,
        ])->layout('components.layouts.app', [
            'title' => $this->attraction->getMetaTitle(),
            'description' => $this->attraction->getMetaDesc()
        ]);;
    }
}
