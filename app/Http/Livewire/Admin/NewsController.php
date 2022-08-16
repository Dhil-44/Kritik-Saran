<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsController extends Component
{
    public $title, $body, $gambar = '', $link = '';
    use WithFileUploads;
    public function render()
    {
        return view('livewire.admin.news-controller', [
            'news' => News::latest()->get(),
        ]);
    }

    public function openModalFeed()
    {
        return $this->dispatchBrowserEvent('openModalNews');
    }

    public function closeModalFeed()
    {
        return $this->dispatchBrowserEvent('closeModalNews');
    }

    public function createNews()
    {
        $this->validate([
            'title' => ['required', 'max:150', 'min:4', 'string'],
            'body' => ['required', 'string'],
//            'gambar' => ['required', 'file', 'mimes:png,jpg,image'],
            'link' => ['nullable']
        ], [
            'title.required' => 'Judul tidak boleh kosong',
            'title.max' => 'maximal 150 karakter',
            'title.min' => 'manimal 4 karakter',
            'body.required' => 'Kolom ini tidak boleh kosong'
//            'gambar.required'=> 'Masukkan gambar',
        ]);
        $news = News::create([
            'title' => Str::of($this->title)->title(),
            'body' => $this->body,
            'link' => $this->link,
            'gambar' => $this->gambar,
        ]);
        if ($news) {
            $this->title = $this->body = $this->gambar = $this->link = null;
            $this->closeModalFeed();
        } else {
            dd('error');
        }

    }

    public function delete($id)
    {
        News::findOrFail($id)->delete();
    }
}
