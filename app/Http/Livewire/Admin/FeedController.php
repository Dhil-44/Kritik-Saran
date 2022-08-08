<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Feed;


class FeedController extends Component
{
    public function render()
    {
        return view('livewire.admin.feed-controller', [
            'feeds' => Feed::latest()->get(),
        ]);
    }
}
