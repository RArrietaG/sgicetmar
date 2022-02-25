<?php

namespace App\Http\Livewire\Admin;

use App\Models\Candidate;
use Livewire\Component;

class Candidates extends Component
{
    
    public $search ="";
    public function render()
    {
        
        return view('livewire.admin.candidates', [
            'candidates' => Candidate::where('name', 'like', '%'.$this->search.'%')
                                    ->orWhere('last_name', 'like', '%'.$this->search.'%')
                                    ->orWhere('folio_number', 'like', '%'.$this->search.'%')
                                    ->latest()->paginate(5)
        
        ]);
    }
}
