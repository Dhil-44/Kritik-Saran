@extends('home.tampilan-utama')
@section('title', 'Kalbis | Critics and Suggestions')
@section('content')
    <div class="wrapper">
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <img class="avatar-rounded" src="{{ asset('dist/img/image/logo-cac.jpg') }}" alt="cac">
                    </div>

                </div>
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="navbar-nav pt-lg-3">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('suggestions') }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="2" />
                                            <path
                                                d="M3 12h4m5 -9v4m5 5h4m-9 5v4m-4.5 -13.5l1 1m8 -1l-1 1m0 7l1 1m-8 -1l-1 1" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Suggestions
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('critics') }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/message-report -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                            <line x1="12" y1="8" x2="12" y2="11" />
                                            <line x1="12" y1="14" x2="12" y2="14.01" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Critics
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('announcements') }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                            <rect x="9" y="3" width="6" height="4"
                                                rx="2" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Announcments
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
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
                    <div class="col-12 bg-info">
                        @yield('kategory')
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
