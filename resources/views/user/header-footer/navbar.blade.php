<nav class="navbar navbar-expand-lg navbar-light   shadow-sm sticky-top">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-6 d-md-flex d-sm-flex col-sm-112 flex-sm-row">
                <a class="navbar-brand " href="{{ route('home-page') }}#">
                    <img src="{{ asset('dist/img/image/Logo-kalbis-utama.png') }}" alt="kalbis" style="width:30%;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-lg-6">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('home-page') ? 'active bg-dark text-white py-0 ' : '' }}"
                                aria-current="page" href="{{ route('home-page') }}">
                                <h4 class="mt-2 fs-5 text-uppercase">Home</h4>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('news-page') ? 'active bg-dark text-white py-0 ' : '' }}"
                                aria-current="page" href="{{ route('news-page') }}">
                                <h4 class="mt-2 fs-5 text-uppercase">News</h4>
                            </a>
                        </li>
                        @if (auth('web')->user()->role != 'admin')
                            <li class="nav-item status">
                                <a class="nav-link {{ request()->is('inbox') ? 'active bg-dark text-white py-0' : '' }}"
                                    href="{{ route('inbox.message') }}">
                                    <h4 class="mt-2 fs-5 position-relative">Inbox
                                        <span class="badge badge-pill bg-red position-relative mb-2"></span>
                                    </h4>
                                </a>
                            </li>
                        @endif
                        @if (auth('web')->user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link text-dark border-success py-0 ms-1"
                                    href="{{ route('admin/home') }}#">
                                    <h4 class="mt-2 text-uppercase fs-5">Backend
                                    </h4>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('signout') }}#" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                    </path>
                                    <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                </svg>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</nav>
