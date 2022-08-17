<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class NewsController extends Component
{
    public $title, $body, $gambar, $link = '', $iteration;
    public $paginate = 20;
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.admin.news-controller', [
            'news' => News::latest()->paginate($this->paginate),
        ]);
    }

    public function openModalFeed()
    {
        return $this->dispatchBrowserEvent('openModalNews');
    }

    public function closeModalNews()
    {
        $this->iteration++;
        $this->title =
            $this->body =
            $this->link =
            $this->gambar = null;
        return $this->dispatchBrowserEvent('closeModalNews');
    }

    public function createNews()
    {
        $this->validate([
            'title' => ['required', 'max:150', 'min:4', 'string'],
            'body' => ['required', 'string'],
            'gambar' => ['nullable', 'mimes:png,jpg,image'],
            'link' => ['nullable']
        ], [

            'title.required' => 'Judul tidak boleh kosong.',
            'title.max' => 'maximal 150 karakter.',
            'title.min' => 'manimal 4 karakter.',
            'body.required' => 'Kolom ini tidak boleh kosong.',
            'gambar.mimes' => 'required type of image.',

        ]);
        $fillname = $this->gambar->storeAs("public", "news-" . rand(1, 10001) . explode(' ', $this->title)[0] . time() . $this->gambar->extension());
        $path = explode("/", $fillname)[1];
        $news = News::create([
            'title'  => Str::of($this->title)->upper()->trim(),
            'body'   => $this->body,
            'link'   => Str::of($this->link)->trim(),
            'gambar' => $path,
        ]);
        if ($news) {
            $this->closeModalNews();
        } else {
            return back();
        }
    }

    public function delete($id)
    {
        News::findOrFail($id)->delete();
    }
}
