<?php

namespace App\Livewire\City;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class CityIndex extends Component
{
    use WithPagination;

    public $title = 'Wszystkie Miejscowości';
    public $description = 'meta cities';

    public function mount()
    {
        // Nie przypisuj wyniku paginacji do właściwości
    }

    public function render()
    {
        $cities = City::withCount('attractions')
            ->having('attractions_count', '>', 0)
            ->orderBy('attractions_count', 'desc')
            ->paginate(6);

        return view('livewire.city.city-index', [
            'cities' => $cities
        ])->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
