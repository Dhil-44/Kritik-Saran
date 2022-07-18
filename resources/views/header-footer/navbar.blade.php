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
                    <ul class="navbar-nav ms-auto fs-3 fw-bolder">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="{{ route('home-page') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}#">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>

            <a class="navbar-brand" href="{{ route('home-page') }}">
                <img src="{{ asset('dist/img/image/Logo-kalbis-utama.png') }}" alt="kalbis" style="width:30%;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fs-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home-page') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="#">SignOut</a>
                    </li>

                </ul>

            </div>
        </div>
</nav>
