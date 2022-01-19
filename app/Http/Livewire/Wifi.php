<?php

namespace App\Http\Livewire;

use App\Models\Wifi as ModelsWifi;
use Livewire\Component;
use Livewire\WithPagination;

class Wifi extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.wifi', [
            'wifis' => ModelsWifi::leftjoin('locations', 'wifis.location', '=', 'locations.id')
                        ->where('wifis.name', 'like', '%' . $this->search . '%')
                        ->select('wifis.id', 'wifis.name', 'locations.name as location', 'wifis.status')
                        ->paginate(10),
        ]);
    }
}
