<?php

namespace App\Livewire\Attraction;

use Livewire\Component;

class AttractionIndex extends Component
{
    public $title = 'Wszystkie atrakcje';
    public $description = 'meta atrakcji';

    public function render()
    {
        return view('livewire.attraction.attraction-index')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);;
    }
}
