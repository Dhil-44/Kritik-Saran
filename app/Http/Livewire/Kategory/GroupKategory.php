<?php

namespace App\Http\Livewire\Kategory;

use Livewire\Component;
use App\Http\Livewire\Kategori\KategoryController;

class GroupKategory extends Component
{
    public KategoryController $kategoryController;
    public function render()
    {
        return view('livewire.kategory.group-kategory', [
            'categories' => \App\Models\Category::all()
        ]);
    }
    public function open($id)
    {
        $this->kategoryController = new KategoryController();
        $this->kategoryController->test($id);
    }
}
