<?php

namespace App\Http\Livewire\SendingForm;

use App\Models\Category;
use App\Models\User;
use Livewire\Component;
use App\Models\Submission;
use Livewire\WithFileUploads;

class SendingAllMessage extends Component
{
    use WithFileUploads;

    public $id_cat, $id_user_target, $message, $file_name = '', $status, $iteration;
    public $allMsgByCats = null;
    public function render()
    {
        return view('livewire.sending-form.sending-all-message', [
            'users' => User::where("id", "!=", auth('web')->id())
                ->where("role", "!=", "admin")->get(),
            'categories' => Category::all(),
            'testimony' => Submission::latest()->get(),
        ]);
    }

    public function groupByThisCategory($id): void
    {
        $this->allMsgByCats = Submission::groupByThisIdCategory($id, 'id_user_pengirim');
    }

    public function openModalCreateModal()
    {
        $this->clear_column();
        return $this->dispatchBrowserEvent('openModalCreateModal');
    }

    public function closeModal()
    {
        $this->iteration++;
        $this->clear_column();
        return $this->dispatchBrowserEvent('closeModal');
    }

    public function createSubmission()
    {
        $this->validate(
            [
                'id_cat' => 'required',
                'id_user_target' => 'required',
                'message' => 'required|max:1000',
                'file_name' => 'nullable|file|mimes:png,jpg,pdf,docx|max:2048'
            ],
            [
                'id_cat.required' => 'Choose category',
                'id_user_target.required' => 'Choose email',
                'message.required' => 'Enter your message',
                'message.max' => 'Character cannot be more than 1000 characters',
            ]
        );
        try {
            $path = '';
            if ($this->file_name !== null) {
                $filename = $this->file_name->storeAs("documents", "attacment" . rand(1, 10000) . time() . "." . $this->file_name->extension());
                $path = explode('/', $filename)[1];
            }
            $data_submission = Submission::create([
                'id_cat' => $this->id_cat,
                'id_user_target' => $this->id_user_target,
                'id_user_pengirim' => auth('web')->id(),
                'message' => $this->message,
                'file_name' => $path,
                'status' => $this->status ? 'public' : 'private',

            ]);

            if ($data_submission) {
                $this->closeModal();
                $this->showToastr('This data successfully submitted', 'success');
                $this->dispatchBrowserEvent('hide_modal_create_sub');
            }
        } catch (\Exception $e) {
            return $this->showToastr("Message cannot be created. There are something went wrong!", "warning");
        }
    }

    public function showToastr($message, $type)
    {
        return $this->dispatchBrowserEvent(
            'showToastr',
            [
                'type' => $type,
                'message' => $message
            ]
        );
    }

    private function clear_column()
    {
        return $this->id_cat = $this->id_user_target = $this->message = $this->file_name = null;
    }
}
