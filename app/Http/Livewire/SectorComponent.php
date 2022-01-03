<?php

namespace App\Http\Livewire;

use App\Models\Sector;
use Livewire\Component;

class SectorComponent extends Component
{
    public function render()
    {
        $sectors = Sector::paginate(4);
        return view('livewire.sector-component', compact('sectors'));
    }
}
