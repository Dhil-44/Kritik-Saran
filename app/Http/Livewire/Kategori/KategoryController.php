<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Submission;

class KategoryController extends Component
{
    public $itemGroups;
    public function render()
    {
        return view('livewire.kategori.kategory-controller', [
            // 'items' => $this->itemGroups
            'items' => Submission::category(3, "id_user_target")
        ]);
    }
    function test($type)
    {
        dd($type);
    }
}
