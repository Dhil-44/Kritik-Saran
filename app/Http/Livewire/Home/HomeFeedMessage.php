<?php

namespace App\Http\Livewire\Home;

use App\Models\Feed;
use http\Env\Response;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
class HomeFeedMessage extends Component
{
    use WithPagination;
    public $title,$body,$category;public $search,$paginate =5;
    protected $paginationTheme = 'bootstrap';

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
    public function createFeedMessage(){

        try{
            $this->validate([
                'title'=> 'required|unique:feeds,title|max:30|min:6',
                'body' => 'required|string',
                'category' => 'required|string|max:12|min:5'
            ],[
                'title.required'=> 'enter title',
                'title.max'     => 'title cant be more than 30 characters',
                'title.min'     => 'title cant be less than 6 characters',
                'body.required' => 'enter message',
                'body.string'   => 'only character',
                'category.required' => 'enter category'
            ]);
           $feed = new Feed();
           $feed->title = Str::of($this->title)->title();
           $feed->body =$this->body;
           $feed->category = $this->category;
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
       return $this->dispatchBrowserEvent('closeModalFeedMsg');
    }
}
