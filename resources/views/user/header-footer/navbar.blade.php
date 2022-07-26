<nav class="navbar navbar-expand-lg navbar-white bg-light  shadow-sm sticky-top">
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
                            <a class="nav-link {{ request()->is('home-page') ? 'active' : '' }}" aria-current="page"
                                href="{{ route('home-page') }}">
                                <h4 class="mt-2">
                                    Home
                                </h4>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                                href="{{ route('profile') }}">
                                <h4 class="mt-2 position-relative">Profile
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        9
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </h4>
                            </a>
                        </li>
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin/home') }}#">
                                    <h4 class="mt-2">Backend
                                    </h4>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}#">
                                <h4 class="mt-2">Sign out</h4>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
</nav>
