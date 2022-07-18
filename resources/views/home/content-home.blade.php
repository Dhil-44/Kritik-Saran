@extends('home.tampilan-utama')
@section('title', 'Kalbis | Critics and Suggestions')
@section('content')
    @include('header-footer.navbar')
    <div class="mask flex-center" style="background-color: rgba(11,102,35,0.7); height:250px;">

        <div class="container">
            <div class="white-text text-center py-4" style="visibility: visible; animation-name: fadeInUp;">
                <img src="http://cac.kalbis.ac.id/frontend/img/logos/logo kalbis putih.png" alt="thumbnail"
                    class="mx-auto d-block" style="width: 100px">
                <h1 class="text-center font-weight-bold">
                    <strong>Kalbis Critics and Suggestions</strong>
                </h1>
            </div>
        </div>
    </div>
    {{-- </section> --}}
    {!! Toastr::message() !!}
    <div class="container-lg mt-4">
        <div class="row">
            <div class="col-4">
                <h3>Testimony</h3>
            </div>
            <div class="col-4 offset-2">
                <h3>Critics and Advices</h3>
            </div>
            <div class="col-2">
                <div class="btn-list">
                    <a href="{{ route('submission-form') }}" class="btn btn-success d-none d-sm-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Create new post
                    </a>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <div>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div class="card-title">Dunn Slane</div>
                                    <div class="card-subtitle">12/34/2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-actions">
                            <div class="dropdown">
                                <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">

                                    <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit message</a>
                                    {{-- <a class="dropdown-item" href="#">Change permissions</a> --}}
                                    {{-- <a class="dropdown-item text-danger" href="#">Delete user</a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=" p-2">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae repellendus excepturi porro
                            magni id officia reiciendis itaque culpa nisi distinctio?</p>
                    </div>
                </div>

                <div class="card mb-4 shadow-md">

                    <div class="card-body hover-shadow-lg">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar rounded"></div>
                            </div>
                            <div class="col-7">
                                <div class="fs-sm-6">Himpunana Mahasiswa Olaraga</div>
                                <div class="fs-6">13/13/2022</div>
                            </div>
                            <div class="card-actions col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">

                                        <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit message</a>
                                        {{-- <a class="dropdown-item" href="#">Change permissions</a> --}}
                                        {{-- <a class="dropdown-item text-danger" href="#">Delete user</a> --}}
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quidem incidunt non
                                    placeat quia repellat. Labore quam mollitia repudiandae id?</p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="card">
                    <div class="card-header">
                        <div>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div class="card-title">Dunn Slane</div>
                                    <div class="card-subtitle">12/34/2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-actions">
                            <div class="dropdown">
                                <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">

                                    <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit message</a>
                                    {{-- <a class="dropdown-item" href="#">Change permissions</a> --}}
                                    {{-- <a class="dropdown-item text-danger" href="#">Delete user</a> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=" p-2">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae repellendus excepturi porro
                            magni id officia reiciendis itaque culpa nisi distinctio?</p>
                    </div>
                </div>
            </div>
            {{-- Critics and Advices --}}
            <div class="col-6 mx-10">
                <div class="card">

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
                                    <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">

                                        <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit message</a>
                                        {{-- <a class="dropdown-item" href="#">Change permissions</a> --}}
                                        {{-- <a class="dropdown-item text-danger" href="#">Delete user</a> --}}
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quidem incidunt non
                                    placeat quia repellat. Labore quam mollitia repudiandae id?</p>
                            </div>
                            <d class="col-12">
                                {{-- <div class="form-label">File upload</div> --}}
                                <input type="file" class="form-control">


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div >
@endsection
