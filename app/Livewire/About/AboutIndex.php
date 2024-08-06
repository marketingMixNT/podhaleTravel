<?php

namespace App\Livewire\About;

use Livewire\Component;

class AboutIndex extends Component
{

    public $title = 'Odkryj Wspaniałość Podhala';
    public $description = 'Poznaj Podhale - region pełen magii, tradycji i niezapomnianych atrakcji. Dowiedz się, co czyni to miejsce wyjątkowym i dlaczego warto je odwiedzić!';
    public function render()
    {
        return view('livewire.about.about-index')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
