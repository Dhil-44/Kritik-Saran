<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Submission;

class SubmissionController extends Component
{

    public $id_sub, $id_cat, $id_user_pengirim, $id_user_target, $message, $file_name;
    public $search;
    public function render()
    {
        if ($this->search) {
            $submissions = Submission::where(function ($q) {
                $q->where('message', 'LIKE', '%' . $this->search . '%');
            })->get();
        } else {
            $submissions = Submission::latest()->get();
        }
        return view('livewire.admin.submission-controller', [
            'submissions' => $submissions
        ]);
    }
    public function deleteSubmission($id)
    {

        Submission::findOrFail($id)->delete();
    }
    public function editSubmission($submission)
    {
        $this->id_sub = $submission['id'];
        $this->id_cat = $submission['get_category']["name_cat"];
        $this->id_user_pengirim = $submission["get_user"]["name"];
        $this->id_user_target = $submission['get_user_target']["name"];
        $this->message = $submission['message'];
        $this->file_name = $submission['file_name'];

        $this->dispatchBrowserEvent('showUpdateModal');
    }
    function updateSubmission()
    {
        Submission::findOrFail($this->id_sub)->update([
            'message' => $this->message,
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d')
        ]);
        $this->clearColumn();
        return $this->dispatchBrowserEvent('closeUpdateModal');
    }

    private function clearColumn()
    {
         $this->id_cat =
            $this->id_user_pengirim =
            $this->id_user_target =
            $this->message =
            $this->file_name = null;
    }
}
