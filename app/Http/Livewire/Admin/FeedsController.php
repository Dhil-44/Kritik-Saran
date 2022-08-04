<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Feed;

class FeedsController extends Component
{
    public function render()
    {
        return view('livewire.admin.feeds-controller');
    }
}
