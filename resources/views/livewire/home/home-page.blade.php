<div>
    <div class="container-lg mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <ul class="nav nav-tabs nav-tabs-alt" data-bs-toggle="tabs" role="tablist">
                        <li class="nav-item col-md-5" role="presentation">
                            <a href="#tabs-home-10" class="nav-link active" data-bs-toggle="tab" aria-selected="false"
                               role="tab" tabindex="-1">Testimony</a>
                        </li>
                        <li class="nav-item col-md-5" role="presentation">
                            <a href="#tabs-profile-10" class="nav-link " data-bs-toggle="tab" aria-selected="true"
                               role="tab">Critics and Advices</a>
                        </li>
                        <li class="nav-item col-auto ms-auto" role="presentation">
                            <a href="#" class="btn btn-success d-none d-sm-inline-block" data-bs-toggle="modal"
                               data-bs-target="#modal-large" style="background: #2e7d32;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 20l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4z"></path>
                                    <path d="M13.5 6.5l4 4"></path>
                                    <path d="M16 18h4m-2 -2v4"></path>
                                </svg>
                                Create new post
                            </a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-home-10" role="tabpanel">
                                <div class="row ">
                                    <div class="col col-md-12">
                                        @foreach ($testimony as $tty)
                                            <div class="card mb-3 mt-2">
                                                <div class="card-header">
                                                    <div>
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <span class="avatar me-2 avatar-rounded"
                                                                      style="background-image: url({{ asset('dist/img/image/logo-ao.jpg') }})"></span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="card-title">{{ $tty->getUser->name }}
                                                                </div>
                                                                <div class="card-subtitle">{{ $tty->created_at }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-actions">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn-action dropdown-toggle"
                                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                                               aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                     width="24" height="24" viewBox="0 0 24 24"
                                                                     stroke-width="2" stroke="currentColor"
                                                                     fill="none" stroke-linecap="round"
                                                                     stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                          fill="none">
                                                                    </path>
                                                                    <circle cx="12" cy="12"
                                                                            r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19"
                                                                            r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5"
                                                                            r="1">
                                                                    </circle>
                                                                </svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Edit message</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class=" p-2">
                                                    <p align="justify">{{ $tty->message }}</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="tabs-profile-10" role="tabpanel" style="">
                                <div class="card" style="margin-bottom:50%;">
                                    <div class="card-body shadow-lg">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar rounded"></div>
                                            </div>
                                            <div class="col-7">
                                                <div class="fs-5">Himpunana Mahasiswa Olaraga</div>
                                                <div class="fs-6">13/13/2022</div>
                                            </div>
                                            <div class="card-actions col-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="btn-action dropdown-toggle"
                                                       data-bs-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                             width="24" height="24" viewBox="0 0 24 24"
                                                             stroke-width="2" stroke="currentColor" fill="none"
                                                             stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="12" cy="19" r="1">
                                                            </circle>
                                                            <circle cx="12" cy="5" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit message</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
                                                    quidem
                                                    incidunt non
                                                    placeat quia repellat. Labore quam mollitia repudiandae id?</p>
                                            </div>
                                            <div class="col-md-6 col-sm-8">
                                                <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('user.home.modal.create-submission-form')
    </div>
</div>
@push('scripts')
    <script>
        window.addEventListener('hide_modal_create_sub', function (e) {
            $('.create_submission').modal('hide');
        })
    </script>
@endpush
