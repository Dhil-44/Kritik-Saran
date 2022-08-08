<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class NewsController extends Component
{
    public $title, $body, $gambar;
    public function render()
    {
        return view('livewire.admin.news-controller');
    }
    public function openModalFeed()
    {
        return $this->dispatchBrowserEvent('openModalNews');
    }
}
