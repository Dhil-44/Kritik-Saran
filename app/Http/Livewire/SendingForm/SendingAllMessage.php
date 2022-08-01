<?php

namespace App\Http\Livewire\SendingForm;

use Livewire\Component;
use App\Models\Submission;

class SendingAllMessage extends Component
{
    public $critics, $suggestions, $announcements;
    public function render()
    {
        return view('livewire.sending-form.sending-all-message');
    }
    public function critic(): Submission
    {
        return Submission::category(2);
    }
}
