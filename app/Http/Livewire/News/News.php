<?php

namespace App\Http\Livewire\News;

use Illuminate\View\View;
use Livewire\Component;
use App\Models\News as Berita;
use Livewire\WithPagination;

class News extends Component
{
    public $paginate = 10;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $title, $body, $gambar = '', $link = '',$data ;

    public function render()
    {
        return view('livewire.news.news', [
            'news' => Berita::latest()->paginate($this->paginate),
            'detail' => $this->data
        ]);
    }

    public function openDetailNews($new)
    {
        $x = $this->data = $new;
        return $this->dispatchBrowserEvent('show-detail');
    }

    public function openModalNews()
    {
        return $this->dispatchBrowserEvent('openModalNews');
    }

    public function closeModalNews()
    {
        return $this->dispatchBrowserEvent('closeModalNews');
    }

    public function createNews()
    {
        $this->validate([
            'title' => ['required', 'max:32', 'min:4', 'string'],
            'body' => ['required', 'string'],
//            'gambar' => ['required', 'file', 'mimes:png,jpg,image'],
            'link' => ['nullable']
        ], [
            'title.required' => 'Judul tidak boleh kosong',
            'title.max' => 'maximal 32 karakter',
            'title.min' => 'manimal 4 karakter',
            'body.required' => 'Kolom ini tidak boleh kosong'
//            'gambar.required'=> 'Masukkan gambar',
        ]);
        $this->closeModalNews();
    }

}
