@extends('home.tampilan-utama')
@section('title', 'Kalbis Critics and Suggestions')
@section('content')
    <div class="wrapper">
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
            <div class="container-fluid mt-3">
                <img class="avatar-rounded" src="{{ asset('dist/img/image/logo-cac.jpg') }}" alt="cac">
            </div>
        </aside>
        @include('header-footer.navbar')
        <header class="navbar navbar-light mt-4 d-none d-lg-flex d-print-none">
            <div class="container-xl">
                <h2>Welcome, <strong>Kalbis Career and Alumni Center</strong> </h2>
            </div>
        </header>

        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="col-12">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="skeleton-avatar"></div>
                                        </div>
                                        <div class="col-7">
                                            <div class="skeleton-line"></div>
                                            <div class="skeleton-line"></div>
                                        </div>
                                        <div class="col-2 ms-auto text-end">
                                            <div class="skeleton-line"></div>
                                            <div class="skeleton-line"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="skeleton-avatar"></div>
                                        </div>
                                        <div class="col-7">
                                            <div class="skeleton-line"></div>
                                            <div class="skeleton-line"></div>
                                        </div>
                                        <div class="col-2 ms-auto text-end">
                                            <div class="skeleton-line"></div>
                                            <div class="skeleton-line"></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-sm-6 col-lg-3">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
