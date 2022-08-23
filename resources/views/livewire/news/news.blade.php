<div class="page-body">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-sm-2 mt-4 col-md-3">
                <div class="list-group">
                    @if (auth('web')->user()->role != 'user')
                        <button class="btn btn-success" wire:click="openModalNews()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                <path d="M16 5l3 3"></path>
                            </svg>
                            Create News
                        </button>
                    @endif
                </div>
            </div>
            <div class="col-lg-10 col-xl-9">
                @foreach ($news as $new)
                    <div class="card card-lg my-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <h1 id="">{{ $new->title }}</h1>
                                </div>
                                <div class="col-auto mb-2">
                                    <button wire:click="openDetailNews({{ $new }})"
                                        class="btn btn-outline-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-align-justified" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <line x1="4" y1="6" x2="20" y2="6"></line>
                                            <line x1="4" y1="12" x2="20" y2="12"></line>
                                            <line x1="4" y1="18" x2="16" y2="18"></line>
                                        </svg>
                                        Show more
                                    </button>
                                </div>
                            </div>
                            <a href="#">
                                @if (str_contains($new->gambar, '.jpg' || '.png' || '.jpeg' || 'news-'))
                                    <img src="{{ $new->gambar }}" class="img-fluid">
                                @endif
                            </a>
                            <p class="mt-2" style="text-align:justify;">{{ $new->body }}</p>
                            <p>
                                <a href="d-block">{{ $new->link }}</a>
                            </p>
                            <span class="fs-5 mt-5">{{ $new->created_at }}</span>
                        </div>
                    </div>
                @endforeach
                <div class="">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('user.home.modal.create-news-modal')
    @include('user.home.modal.show-detail-news-modal')
</div>
@push('scripts')
    <script>
        window.addEventListener('openModalNews', () => {
            $('.openModalNews').modal('show')
            $('.openModalNews').find('span.error').html('')
        })
        window.addEventListener('closeModalNews', () => {
            $('.openModalNews').modal('hide')
            $('input#InputFile').value = null
        })
        window.addEventListener('show-detail', (e) => {
            $('#show-detail').modal('show')
            const detail = e.detail.item
            document.getElementById('detail-title').innerHTML = detail['title']
            document.getElementById('detail-img').src = detail['gambar']
            document.getElementById('detail-body').innerHTML = detail['body']
            document.getElementById('detail-link').href = detail['link']

        })
    </script>
@endpush()
