<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Comment;

class ReplySubmission extends Component
{
    public $data_comment, $name, $updated_at, $message, $logo, $comment, $id_sub, $file;
    protected $listeners = [
        'setDataComment'
    ];
    public function render()
    {
        return view('livewire.user.reply-submission', [
            // 'comments' => Comment::latest()-> paginate(3),
            'comments' => Comment::query()
                ->where('submission_id', $this->id_sub)
                ->paginate(),
        ]);
    }
    public function setDataComment($data)
    {
        $d = $this->data_comment = $data;
        $this->id_sub = $d['id'];
        $this->name = $d['get_user']['name'];
        $this->logo = $d['get_user']['logo'];
        $this->message = $d['message'];
        $this->file = $d['file_name'];
        $this->updated_at = $d['updated_at'];
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
            'submission_id' => $this->id_sub,
            'message' => $this->comment,
        ]);
        if ($comment) {
            $this->comment = '';
            $this->showToastr('Your comment already posted!', 'success');
        } else {
            $this->comment = '';
            // $this->clear();
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
    public function clear()
    {
        $this->comment = '';
        $this->data_comment = '';
        // $this->id_sub = '';
        $this->name = '';
        $this->logo = '';
        $this->message = '';
        $this->updated_at = '';
    }
}
