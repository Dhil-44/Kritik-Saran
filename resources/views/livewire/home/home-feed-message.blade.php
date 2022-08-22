<div class="">
    <div class="row px-2">
        <div class="col-2 mt-2 shadow-lg" style="max-height: 26em">
            <div class="text-bold fs-2 mx-auto px-0 py-2"><b>Category</b></div>
            <div class="list-group list-group-flush card">
                <button type="button" wire:click.prevent="all()"
                    class="list-group-item list-group-item-action text-black list-group-item-light p-3">{{ __('ALL') }}</button>
                @foreach ($users as $user)
                    <button type="button" wire:click.prevent="group({{ $user }})"
                        class="list-group-item  list-group-item-action text-black list-group-item-light text-uppercase p-3">{{ __($user->name) }}</button>
                @endforeach
            </div>
        </div>
        <div class="col-lg-8 col-sm-8">
            <div class="col-12 mt-2">
                <div class="example no_toc_section example-bg card px-1 py-2">
                    <div class="example-content">
                        <div class="example-column example-column-2">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-1" style="margin-left: 10px;">
                                                <select wire:model="paginate" class="form-control form-control-sm"
                                                    style="width: 40px">
                                                    @for ($i = 1; $i <= $submissions->count(); $i++)
                                                        <option style="text-align: center" value="{{ $i }}">
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-2" style="margin-left: 10px;">
                                                <select name="" class="form-control form-control-sm"
                                                    id="" style="text-align: center">
                                                    <option value="lastet">latest</option>
                                                    <option value="oldest">oldest</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-auto ms-auto d-print-none">
                                        <div class="d-flex">
                                            <div class="me-3 d-none d-md-block">
                                                <div class="input-icon">
                                                    <input type="text" wire:model="search" class="form-control"
                                                        placeholder="Search…">
                                                    <span class="input-icon-addon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-search" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <circle cx="10" cy="10" r="7">
                                                            </circle>
                                                            <line x1="21" y1="21" x2="15"
                                                                y2="15"></line>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-2 fs-3 ">
                {{ $submissions->links() }}
            </div>
        </div>
        {{-- New sidebar left --}}
        <div class="col-2 mt-2">
            <div class="text-bold fs-2 mx-auto px-0 py-2"><b>News</b></div>
            <div class="card" style="height: 35rem">
                <div class="card-body card-body-scrollable px-1 card-body-scrollable-shadow">
                    <div class="divide-y">
                        @foreach ($news as $new)
                            <div class="card mb-2 hover-shadow-lg" wire:click="openDetailThisNews({{ $new }})">
                                <div class="card-img-top img-responsive img-responsive-21x9"
                                    style="background-image: url({{ $new->gambar }})">
                                </div>
                                <div class="card-body px-1">
                                    <h2 class="">{{ $new->title }}</h2>
                                </div>
                            </div>
                        @endforeach()
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>

{{-- @include('user.home.modal.create-feed-message') --}}
@include('user.home.modal.replyOnSubmission')
@include('user.home.modal.show-detail-news-modal')
</div>
</div>

@push('scripts')
    <script>
        window.addEventListener('openModalReplySub', (e) => {
            $('#modal-reply-sub').modal('show')
        })
        window.addEventListener('showDetail', (e) => {
            $('#show-detail').modal('show')
        })
    </script>
@endpush
