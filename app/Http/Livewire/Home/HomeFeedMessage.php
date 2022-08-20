<?php

namespace App\Http\Livewire\Home;

use App\Models\News;
use App\Models\Submission;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

// Feed untuk public
class HomeFeedMessage extends Component
{
    use WithPagination;
    public $search, $paginate = 8, $data;
    protected $paginationTheme = 'bootstrap';
    public $id_cat, $id_user_target, $message, $file_name, $status;
    private $submissions = null;

    public function render()
    {
        if ($this->search) {
            $this->submissions = Submission::where(function ($q) {
                $q->where("message", "LIKE", "%" . $this->search . "%")
                    ->where("status", "public");
            })->latest()->paginate($this->paginate);
        } else {
            if ($this->submissions != null) {
                $this->submissions = $this->submissions;
            } else {
                $this->submissions = Submission::where("status", "public")->latest('created_at')->paginate($this->paginate);
            }
        }
        return view('livewire.home.home-feed-message', [
            'submissions' => $this->submissions,
            'news' => News::latest()->paginate(10),
            'users' => User::getAllRoleDeparment(),
            'detail' => $this->data,
        ]);
    }

    public function all()
    {
        $this->submissions = null;
    }
    public function openDetailThisNews($new)
    {
        $this->data = $new;
        return $this->dispatchBrowserEvent('show-detail');
    }
    public function onItemReplyorEdit($data)
    {
        $this->emit('setDataComment', $data);
        return $this->dispatchBrowserEvent('openModalReplySub', [
            'data' => $data
        ]);
    }

    public function group($user)
    {
        $this->submissions = Submission::where('id_user_pengirim', $user['id'])
            ->where("status", "public")
            ->paginate($this->paginate);
    }

    public function openModal()
    {
        dd($this->dispatchBrowserEvent('openCreateFeedMsg'));
    }

    function delete()
    {
        $this->showToastr('delete successfully', 'success');
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
}
