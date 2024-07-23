<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryIndex extends Component
{
    use WithPagination;

    public $title = 'Wszystkie Kategorie';
    public $description = 'meta kategorii';

 

    public function render()
    {
        $categories = Category::where('type', 'attractions')
            ->withCount('attractions')
            ->having('attractions_count', '>', 0)
            ->orderBy('attractions_count', 'desc')
            ->paginate(6);

        return view('livewire.category.category-index', [
            'categories' => $categories
        ])->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
