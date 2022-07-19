<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\User;
use App\Models\Category;
use App\Models\Submission;

class HomePage extends Component
{
    public $id_cat, $id_user, $message = "ada", $file_name;
    public function render()
    {
        return view('livewire.home.home-page', [
            'users' => User::where('id', '!=', auth('web')->id())->get(),
            'categories' => Category::all()
        ]);
    }
    public function createSubmission()
    {
        $this->validate(
            [
                'id_user' => 'required',
                'id_cat'  => 'required',
                'message' => 'required|max:1000',
            ],
            [
                'id_user.required' => 'Choose email',
                'id_cat.required' => 'Choose category',
                'message.required' => 'Enter your message',
                'message.max' => 'Character cannot be more than 1000 characters',
            ]
        );
        $data_submission = Submission::create([
            'id_cat' => $this->id_cat,
            'id_user' => $this->id_user,
            'message' => $this->message,
            'file_name' => '',
        ]);

        if ($data_submission) {
            $this->clear_column();
            $this->dispatchBrowserEvent('hide_modal_create_sub',);
        } else {
            return 'oke';
        }
    }

    private function clear_column()
    {
        return $this->id_cat = $this->id_user = $this->message = $this->file_name = null;
    }
}
