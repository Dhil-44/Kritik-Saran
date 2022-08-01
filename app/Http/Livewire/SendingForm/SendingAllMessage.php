<?php

namespace App\Http\Livewire\SendingForm;

use Livewire\Component;
use App\Models\Submission;

class SendingAllMessage extends Component
{
    // public $datas = null;
    public function render()
    {
        return view('livewire.sending-form.sending-all-message');
    }
    // function critic()
    // {
    //     $this->datas =  Submission::category(1, "id_user_pengirim");
    // }
    // public function suggestion()
    // {
    //     return Submission::category(2, "id_user_pengirim");
    // }
    // public function annoucement()
    // {
    //     return Submission::category(3, "id_user_pengirim");
    // }
}
