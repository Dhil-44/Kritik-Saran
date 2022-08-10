<?php

namespace App\Http\Livewire\SendingForm;

use App\Models\Submission;
use Livewire\Component;

class PendingMessage extends Component
{
    public function render()
    {
        $subs = Submission::simplePaginate(4);
        return view('livewire.sending-form.pending-message',compact('subs'));
    }

    function publish($id){
        Submission::findOrFail($id)->update([
            'status'=>'public'
        ]);
    }
}
