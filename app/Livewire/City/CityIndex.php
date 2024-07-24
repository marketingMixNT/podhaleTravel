<?php

namespace App\Livewire\City;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class CityIndex extends Component
{
    use WithPagination;

    public $title = 'Wszystkie Miejscowości';
    public $description = 'meta cities';

    #[Computed(persist: true, seconds: 7200)]
    public function getCitiesProperty()
    {
        return City::withCount('attractions')
        ->having('attractions_count', '>', 0)
        ->orderBy('attractions_count', 'desc')
        ->paginate(6);
    }

    public function render()
    {
        return view('livewire.city.city-index')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
