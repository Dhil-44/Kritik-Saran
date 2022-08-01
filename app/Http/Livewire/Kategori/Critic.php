<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Submission;

class Critic extends Component
{
    public function render()
    {

        return view('livewire.kategori.critic', [
            'critics' => Submission::category(1, "id_user_target"),
        ]);
    }
}
