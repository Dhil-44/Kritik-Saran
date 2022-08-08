<?php

namespace App\Http\Livewire\Home;

use App\Models\Feed;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
class HomeFeedMessage extends Component
{
    use WithPagination;
    public $title,$body,$category,$search,$paginate = 5;
    protected $paginationTheme = 'bootstrap';
    public $upd_body,$id_update;

    public function render()
    {
        if($this->search){
            $feeds = Feed::where(function($q){
                $q->where("title","LIKE","%".$this->search."%");
            })->latest()->paginate($this->paginate);
        }else{
            $feeds = Feed::latest()->paginate($this->paginate);
        }
        return view('livewire.home.home-feed-message',[
            'feeds'=>$feeds,
        ]);
    }
    public function openModal(){

            $this->dispatchBrowserEvent('openCreateFeedMsg');
    }
    function editFeed($feed){
        $this->id_update = $feed['id'];
       $this->upd_body = $feed['body'];
    }
    public function deleteFeed($id){
        dd($id);
    }
    public function updateFeed(){
        $this->validate([
            'upd_boyd' => ['required','min:4'],

        ]);
        Feed::findOrFail($this->id_update)->update([
            'body'=>$this->upd_body,
        ]);

    }
    public function createFeedMessage(){

        try{
            $this->validate([
                'title'=> 'required|unique:feeds,title|max:30|min:4',
                'body' => 'required|string',
                'category' => 'required|string|max:12|min:4'
            ],[
                'title.required'=> 'enter title',
                'title.max'     => 'title cant be more than 30 characters',
                'title.min'     => 'title cant be less than 6 characters',
                'body.required' => 'enter message',
                'body.string'   => 'only character',
                'category.required' => 'enter category'
            ]);
           $feed = new Feed();
           $feed->title    = Str::of($this->title)->title();
           $feed->category = $this->category;
           $feed->body     = $this->body;
           $feed->user_id  = auth('web')->id();
           $save = $feed->save();
           if($save){
               $this->title = $this->body=$this->category = null;
               $this->closeModal();
           }

        }catch (\Exception $e){
            return Response()->json([
                'message'=>'Failed',
                'code'=>500,
                'error'=>$e
            ]);
        }

    }
    public function closeModal()
    {
        $this->title = $this->body=$this->category = null;
       return $this->dispatchBrowserEvent('closeModalFeedMsg');
    }
}
