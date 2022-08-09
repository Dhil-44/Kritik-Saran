<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\News as Berita;
use Livewire\WithPagination;

class News extends Component
{
    public $paginate = 10;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.news.news',[
            'news' => Berita::latest()->paginate($this->paginate),
        ]);
    }
 public function  openDetailNews(){
        dd('create soon');
}
}
