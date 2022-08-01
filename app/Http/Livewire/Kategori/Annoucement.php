<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Submission;

class Annoucement extends Component
{
    public function render()
    {
        return view('livewire.kategori.annoucement', [
            'annoucements' => Submission::category(3, "id_user_target")
        ]);
    }
}
