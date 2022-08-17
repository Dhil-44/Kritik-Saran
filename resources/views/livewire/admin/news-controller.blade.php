<div>
    <div class="row mr-2">
        <button wire:click="openModalFeed()" class="btn btn-success ml-auto mb-1"><i class="fa fa-plus"></i> Create
            news
        </button>
    </div>
    <div class="row">
        @foreach ($news as $new)
            <div class="col-md-12 col-lg-6 col-xl-4 mb-2">
                <div class="card mb-1">
                    <img class="card-img-top" id="trans" src="{{ $new->gambar }}" alt="Dist Photo 3"
                        style="opacity: 0.5; ">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-black text-bold">{{ $new->title }}</h5>
                        <p class="card-text pb-1 pt-1 text-black">
                            {{ Str::limit($new->body, 200) }}
                        </p>
                        </p>
                        <a href="#" class="text-black" style="max-height: 50px;">{{ $new->created_at }}</a>
                    </div>
                </div>
                <div class="">
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-primary" wire:click="delete({{ $new->id }})">Hapus</button>
                </div>
            </div>
        @endforeach
    </div>
    {{-- @include('admin.home.modal.create-feed-modal') --}}
    @include('user.home.modal.create-news-modal')
</div>
@push('scripts')
    <script>
        window.addEventListener('openModalNews', () => {
            $('#modal-news').modal('show');
        })
        window.addEventListener('closeModalNews', () => {
            $('#modal-news').modal('hide');
        })
    </script>
@endpush
