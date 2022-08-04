<div class="container-fluid px-0 mx-3">
    {{-- Stop trying to control. --}}
    <div class="row">
        <div class="col-2 mt-2 card shadow-lg" style="margin-bottom: 50%;">
                <div class=" text-bold fs-2 mx-auto px-0 py-2"><b>Category</b></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>

                </div>
        </div>
        <div class="col-8">
            <div class="col-12 mt-2">
                <div class="example no_toc_section example-bg card px-1 py-2">
                    <div class="example-content">
                        <div class="example-column example-column-2">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-1 " style="margin-left: 10px;">
                                                <select wire:model="paginate" class="form-control form-control-sm">
                                                    @for($i  = 5; $i <= 30; $i+=5)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select></div>

                                            <div class="col-2">
                                                <select name="" class="form-control form-control-sm" id="">
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
                                                                               class="icon icon-tabler icon-tabler-search"
                                                                               width="24" height="24"
                                                                               viewBox="0 0 24 24" stroke-width="2"
                                                                               stroke="currentColor" fill="none"
                                                                               stroke-linecap="round"
                                                                               stroke-linejoin="round">
                                                                               <path stroke="none" d="M0 0h24v24H0z"
                                                                                     fill="none"></path>
                                                                               <circle cx="10" cy="10" r="7"></circle>
                                                                               <line x1="21" y1="21" x2="15"
                                                                                     y2="15"></line>
                                                                            </svg>
                                        </span>
                                                </div>
                                            </div>
                                            <button class="btn btn-green" wire:click="openModal()">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="icon icon-tabler icon-tabler-pencil-plus" width="24" height="24"
                                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                     stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8 20l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4z"></path>
                                                    <path d="M13.5 6.5l4 4"></path>
                                                    <path d="M16 18h4m-2 -2v4"></path>
                                                </svg>
                                                Add new feed
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 ">
                @foreach($feeds as $feed)
                    <div class="card shadow-sm mt-2 hover-shadow-lg" style="border-radius: 20px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                <span class="avatar me-1 avatar-rounded avatar-md"
                                      style="background-image: url({{ asset('dist/img/image/logo-kal.jpg') }})"></span>
                                </div>
                                <div class="col" style="font-family:'Roboto Medium' ">
                                    <div class=""><h3><b>{{$feed->title}}</b></h3></div>
                                    <div class="fs-5 mb-2 -mt-1" style="margin-top: -9px;">{{$feed->created_at}}</div>
                                    <div class="text">
                                        <p align="justify" class="" style="margin-right: 7px;">
                                            {{$feed->body}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-2 fs-3 ">
                {{$feeds->links()}}
            </div>
        </div>

    </div>
    @include('user.home.modal.create-feed-message')
</div>
@push('scripts')
    <script>

        $(function () {
            window.addEventListener('openCreateFeedMsg', function (e) {
                $('.create_feed_message').modal('show')
            })
            window.addEventListener('closeModalFeedMsg', (e) => {
                $('.create_feed_message').modal('hide')
            })
        })
    </script>
@endpush
