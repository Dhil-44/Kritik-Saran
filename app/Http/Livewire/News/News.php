<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\News as Berita;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class News extends Component
{
    public $paginate = 10;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title, $body, $gambar, $link = '', $data, $iteration;

    use WithFileUploads;
    // protected $listeners = [
    //     // 'openModalNews',
    //     // 'closeModalNews',
    //     // 'createNews'
    // ];
    public function createNews()
    {
        $this->validate([
            'title' => ['required', 'max:32', 'min:4', 'string'],
            'body' => ['required', 'string'],
            'gambar' => ['mimes:png,jpg,image', 'nullable'],
            'link' => ['nullable', 'string']
        ], [
            'title.required' => 'Judul tidak boleh kosong',
            'title.max' => 'maximal 32 karakter',
            'title.min' => 'manimal 4 karakter',
            'body.required' => 'Kolom ini tidak boleh kosong',
            'gambar.mimes' => 'required image'
        ]);
        $path = null;
        if ($this->gambar === null) {
            $path = '';
        } else {
            $path = $this->gambar->storeAs("public", "news-" . rand(1, 10001) . explode(' ', $this->title)[0] . time() . '.' . $this->gambar->extension());
            $path = explode("/", $path)[1];
        }
        $news = Berita::create([
            'title' => Str::of($this->title)->title()->trim(),
            'body' => Str::of($this->body)->trim(),
            'link' => $this->link,
            'gambar' => $path,
        ]);
        if ($news) {
            $this->showToastr("Create News Succeed!", 'Success');
            $this->closeModalNews();
        }
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

    public function render()
    {
        return view('livewire.news.news', [
            'news' => Berita::latest()->paginate($this->paginate),
            'detail' => $this->data,
            'iteration' => $this->iteration
        ]);
    }

    public function openDetailNews($new)
    {
        // $this->data = $new;
        return $this->dispatchBrowserEvent('show-detail', [
            'item' => $new
        ]);
    }

    public function openModalNews()
    {
        return $this->dispatchBrowserEvent('openModalNews');
    }

    public function closeModalNews()
    {
        $this->iteration++;
        $this->title = '';
        $this->body = '';
        $this->link = '';
        $this->gambar = '';
        return $this->dispatchBrowserEvent('closeModalNews');
    }
}
