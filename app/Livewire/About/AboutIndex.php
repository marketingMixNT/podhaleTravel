<?php

namespace App\Livewire\About;

use Livewire\Component;

class AboutIndex extends Component
{

    public $title = 'Podhale';
    public $description = 'podhale meta';
    public function render()
    {
        return view('livewire.about.about-index')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
