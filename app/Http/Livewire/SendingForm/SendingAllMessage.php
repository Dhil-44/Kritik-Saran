<?php

namespace App\Http\Livewire\SendingForm;

use App\Models\Category;
use App\Models\User;
use Livewire\Component;
use App\Models\Submission;

class SendingAllMessage extends Component
{
    public $id_cat, $id_user_target, $message, $file_name, $status;
    public function render()
    {
//
        return view('livewire.sending-form.sending-all-message',[
            'users' => User::where("id", "!=", auth('web')->id())
                ->where("email","!=","admin@gmail.com" )
                ->where("email","!=","rektoratkalbis@gmail.com" )
                ->where('role','department')->get(),
            'categories' => Category::all(),
            'testimony' => Submission::latest()->get(),
        ]);
    }
    public function openModalCreateModal(){
        $this->clear_column();
        return $this->dispatchBrowserEvent('openModalCreateModal');
    }
     public function closeModal(){
        $this->clear_column();
        return $this->dispatchBrowserEvent('closeModal');
    }
    public function createSubmission()
    {
        $this->validate(
            [
                'id_cat'  => 'required',
                'id_user_target' => 'required',
                'message' => 'required|max:1000',
            ],
            [
                'id_cat.required' => 'Choose category',
                'id_user_target.required' => 'Choose email',
                'message.required' => 'Enter your message',
                'message.max' => 'Character cannot be more than 1000 characters',
            ]
        );
        $data_submission = Submission::create([
            'id_cat' => $this->id_cat,
            'id_user_target' => $this->id_user_target,
            'id_user_pengirim' =>  auth('web')->id(),
            'message' => $this->message,
            'file_name' => '',
            'status' => $this->status ? 'public' : 'private',

        ]);

        if ($data_submission) {
            $this->closeModal();
//            $this->clear_column();
//            $this->dispatchBrowserEvent('hide_modal_create_sub',);
        }
    }
    private function clear_column()
    {
        return $this->id_cat = $this->id_user_target = $this->message = $this->file_name = null;
    }

}
