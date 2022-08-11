<?php

namespace App\Http\Livewire\Home;

//use App\Models\Feed;
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

    public $search, $paginate = 5;
    protected $paginationTheme = 'bootstrap';
    public $id_cat, $id_user_target, $message, $file_name, $status;
    public $emailToCategory;
    public function render()
    {
//        if($this->emailToCategory){
//            $submissions =  Submission::getGroupByCategory(4);
//        }
        $users = User::where('role', 'department')
            ->where('email', "!=", 'rektoratkalbis@gmail.com')
            ->where('email', "!=", 'admin@gmail.com')
            ->get();
        // search
        if ($this->search) {
            $submissions = Submission::where(function ($q) {
                $q->where("message", "LIKE", "%" . $this->search . "%")
                    ->where("status", "public");
            })->latest()->paginate($this->paginate);

        } else {
            $submissions = Submission::where("status", "public")->paginate($this->paginate);
        }

        return view('livewire.home.home-feed-message', [
//            'feeds'=>$feeds,
            'submissions' => $submissions,
            'news' => News::latest()->get(),
            'users' => $users
        ]);
    }

    public function openModal()
    {
        $this->dispatchBrowserEvent('openCreateFeedMsg');
    }

    function editFeed($submission)
    {

    }

    public function deleteFeed($id)
    {
        dd($id);
    }
    // tidak dipakai
    public function updateFeed()
    {
        $this->validate([
            'upd_boyd' => ['required', 'min:4'],

        ]);
        Feed::findOrFail($this->id_update)->update([
            'body' => $this->upd_body,
        ]);

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
