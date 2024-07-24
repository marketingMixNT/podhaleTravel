<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class CategoryIndex extends Component
{
    use WithPagination;

    public $title = 'Wszystkie Kategorie';
    public $description = 'meta kategorii';

    #[Computed(persist: true, seconds: 7200)]
    public function getCategoriesProperty()
    {
        return Category::where('type', 'attractions')
        ->withCount('attractions')
        ->having('attractions_count', '>', 0)
        ->orderBy('attractions_count', 'desc')
        ->paginate(6);
    }

 

    public function render()
    {
       

        return view('livewire.category.category-index')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
