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
    public $search, $paginate = 8, $order = "asc";
    protected $paginationTheme = 'bootstrap';
    public $id_cat, $id_user_target, $message, $file_name, $status;
    private $submissions = null;
    protected $listeners = [
        'all' => '$refresh',
        'group'
    ];


    public function render()
    {
        if ($this->search) {
            $this->submissions = Submission::where(function ($q) {
                $q->where("message", "LIKE", "%" . $this->search . "%")
                    ->orWhereHas("getUser", function ($q) {
                        $q->where("name", "LIKE", "%" . $this->search . "%");
                    })->where("status", "public");
            })->orderBy('updated_at', $this->order)->paginate($this->paginate);
        } else {
            if ($this->submissions != null) {
                $this->submissions = $this->submissions;
            } else {
                $this->submissions = Submission::where("status", "public")->orderBy('updated_at', $this->order)->paginate($this->paginate);
            }
        }

        return view('livewire.home.home-feed-message', [
            'submissions' => $this->submissions,
            'news' => News::latest()->limit(5)->get(),
            'users' => User::getAllRoleDeparment(),
        ]);
    }
    function updatingSearch()
    {
        $this->resetPage();
    }
    public function all(): void
    {
        $this->submissions = null;
    }
    public function openDetailThisNews($new)
    {
        // return $this->dispatchBrowserEvent('showDetail', [
        //     'new' => $new
        // ]);
        return to_route('news-page');
    }
    public function onItemReplyorEdit($data)
    {
        $this->emit('setDataComment', $data);
        return $this->dispatchBrowserEvent('openModalReplySub', [
            'data' => $data
        ]);
    }
    public function group($user): void
    {
        $this->submissions = Submission::where('id_user_pengirim', $user['id'])
            ->where("status", "public")
            ->latest()
            ->paginate($this->paginate);
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
