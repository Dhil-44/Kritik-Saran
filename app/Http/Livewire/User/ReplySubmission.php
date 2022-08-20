<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Comment;

class ReplySubmission extends Component
{
    public $comment, $name, $updated_at, $message, $logo;
    public function render()
    {
        return view('livewire.user.reply-submission', [
            'comments' => Comment::latest()->paginate(3),
        ]);
    }
    public function postComment()
    {
        $this->validate([
            'comment' => ['required', 'string'],
        ], [
            'comment.required' => 'Kolom ini harus diisi jika ingin melakukan komentar!',
        ]);
        $comment = Comment::create([
            'user_id' => auth('web')->id(),
            'message' => $this->comment,
        ]);
        if ($comment) {
            $this->comment = null;
            $this->showToastr('Your comment already posted!', 'success');
        } else {
            $this->comment = null;
            $this->showToastr("We're sorry there are something went wrong!", 'danger');
        }
    }
    private function showToastr($msg, $type)
    {
        return $this->dispatchBrowserEvent('showToastr', [
            'message' => $msg,
            'type' => $type,
        ]);
    }
}
