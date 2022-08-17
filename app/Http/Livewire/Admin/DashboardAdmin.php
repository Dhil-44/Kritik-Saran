<?php

namespace App\Http\Livewire\Admin;

use App\Models\Feed;
use App\Models\News;
use Livewire\Component;
use App\Models\User;
use App\Models\Submission;

class DashboardAdmin extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard-admin', [
            'users' => User::countUsers(),
            'subms' => Submission::countSubs(),
            'news' => News::get()->count()

        ]);
    }
}
