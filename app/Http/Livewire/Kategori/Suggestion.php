<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Submission;

class Suggestion extends Component
{
    public function render()
    {

        return view('livewire.kategori.suggestion', [
            'suggestions' => Submission::category(2),
        ]);
    }
}
