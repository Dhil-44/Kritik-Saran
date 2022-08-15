<?php

namespace App\Http\Livewire\Home;

use App\Models\News;
use App\Models\Submission;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

// Feed untuk public
class HomeFeedMessage extends Component
{
    use WithPagination;

    public $search, $paginate = 5, $data;
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
                //                $this->submissions = null;
                $this->submissions = Submission::where("status", "public")->latest('created_at')->paginate($this->paginate);
            }
        }
        return view('livewire.home.home-feed-message', [
            'submissions' => $this->submissions,
            'news' => News::latest()->paginate(10),
            'users' => User::getAllRoleDepartent(),
            'detail' => $this->data
        ]);
    }

    function all()
    {
        $this->submissions = null;
    }

    public function openDetailThisNews($new)
    {
        $this->data = $new;
        return $this->dispatchBrowserEvent('show-detail');
    }

    function group($user)
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

        $this->showToastr('funckyou asnflanfalnfkanamdnakehaoihdandmanwo', 'success');
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

    // tidak dipakai
    public function createFeedMessage()
    {
        try {
            $this->validate([
                'title' => 'required|unique:feeds,title|max:30|min:4',
                'body' => 'required|string',
                'category' => 'required|string|max:12|min:4'
            ], [
                'title.required' => 'enter title',
                'title.max' => 'title cant be more than 30 characters',
                'title.min' => 'title cant be less than 6 characters',
                'body.required' => 'enter message',
                'body.string' => 'only character',
                'category.required' => 'enter category'
            ]);
            $feed = new Feed();
            $feed->title = Str::of($this->title)->title();
            $feed->category = $this->category;
            $feed->body = $this->body;
            $feed->user_id = auth('web')->id();
            $save = $feed->save();
            if ($save) {
                $this->title = $this->body = $this->category = null;
                $this->closeModal();
            }
        } catch (\Exception $e) {
            return Response()->json([
                'message' => 'Failed',
                'code' => 500,
                'error' => $e
            ]);
        }
    }
}
