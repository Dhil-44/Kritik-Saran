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
                    <ul class="navbar-nav ms-auto fs-3">
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('home-page') ? 'active bg-dark text-white py-0 ' : '' }}"
                                aria-current="page" href="{{ route('home-page') }}">
                                <h4 class="mt-2 text-uppercase">Home</h4>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('news-page') ? 'active bg-dark text-white py-0 ' : '' }}"
                                aria-current="page" href="{{ route('news-page') }}">
                                <h4 class="mt-2 text-uppercase">News</h4>
                            </a>
                        </li>
                        @if (Auth::user()->role != 'admin')
                            <li class="nav-item status">
                                <a class="nav-link {{ request()->is('inbox') ? 'active bg-dark text-white py-0' : '' }}"
                                    href="{{ route('inbox.message') }}">
                                    <h4 class="mt-2 position-relative">Inbox
                                        <span class="badge badge-pill bg-red position-relative mb-2"></span>
                                    </h4>
                                </a>
                            </li>
                        @endif
                        @if (auth('web')->user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link text-dark border-success py-0 ms-1"
                                    href="{{ route('admin/home') }}#">
                                    <h4 class="mt-2 text-uppercase">Backend
                                    </h4>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}#">
                                <h4 class="mt-2 text-uppercase">Sign out</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</nav>
