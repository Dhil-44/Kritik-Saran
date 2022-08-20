<?php

namespace App\Http\Livewire\SendingForm;

use App\Models\Submission;
use Livewire\Component;
use Livewire\WithPagination;

class PendingMessage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        // $subs = Submission::where('status','private')->paginate(4);
        $subs = Submission::query()
            ->where('status', 'private')
            ->where('id_user_pengirim', auth('web')->id())
            ->orderBy('updated_at', 'desc')
            ->paginate(5);
        return view('livewire.sending-form.pending-message', compact('subs'));
    }

    function publish($id)
    {
        Submission::findOrFail($id)->update([
            'status' => 'public'
        ]);
    }
}
