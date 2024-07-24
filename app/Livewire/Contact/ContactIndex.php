<?php

namespace App\Livewire\Contact;

use Livewire\Component;

class ContactIndex extends Component
{

    public $title = 'Kontakt';
    public $description = 'meta kategorii';
    public function render()
    {
        return view('livewire.contact.contact-index')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
