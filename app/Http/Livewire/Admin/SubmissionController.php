<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Submission;

class SubmissionController extends Component
{
    public function render()
    {
        return view('livewire.admin.submission-controller', [
            'submissions' => Submission::all(),
        ]);
    }
}
