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
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Dashboard
                </h2>
            </div>
            <div class="col-auto ms-auto">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-white">
                            New view
                        </a>
                    </span>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <!-- SVG icon code -->
                        Create new report
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                        data-bs-target="#modal-report" aria-label="Create new report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <!-- SVG icon code -->
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg mt-4">
        <div class="row">
            <div class="col-5">
                <h3>Testimony</h3>
            </div>
            <div class="col-1">

            </div>
            <div class="col-5">
                <h3>Critics and Advices</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6">
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
                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quidem incidunt non
                                    placeat quia repellat. Labore quam mollitia repudiandae id?</p>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-body hover-shadow-lg">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar rounded"></div>
                            </div>
                            <div class="col-7">
                                <div class="fs-sm-6">Himpunana Mahasiswa Olaraga</div>
                                <div class="fs-6">13/13/2022</div>
                            </div>
                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quidem incidunt non
                                    placeat quia repellat. Labore quam mollitia repudiandae id?</p>
                            </div>
                            <div class="col-12">

                            </div>


                        </div>

                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus felis eu rutrum aliquam.
                                Nam ultrices felis nec urna tincidunt condimentum. Aenean pretium mauris eget pellentesque
                                consequat. Suspendisse est erat, finibus non finibus quis, tincidunt euismod turpis. Nunc
                                finibus dictum metus. Donec vel libero ultrices, interdum tortor vitae, dapibus lacus.
                                Maecenas et quam volutpat ligula pellentesque semper. Quisque vitae sem arcu. Suspendisse a
                                ipsum felis. Donec ultrices est leo, eget molestie felis ultricies ac. Nullam vitae ipsum
                                vel est auctor fermentum. Donec ac finibus
                                orci, ac auctor odio. Morbi consectetur magna ut dolor imperdiet, a luctus ex mollis. Aenean
                                sit amet luctus mi..</p>

                        </div>
                    </div>
                </div>

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

                                <div class="col-12">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quidem incidunt non
                                        placeat quia repellat. Labore quam mollitia repudiandae id?</p>
                                </div>
                                <d class="col-12">
                                    <div class="form-label">File upload</div>
                                    <input type="file" class="form-control">

                            </div>
                        </div>

                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus felis eu rutrum aliquam.
                                Nam ultrices felis nec urna tincidunt condimentum. Aenean pretium mauris eget pellentesque
                                consequat. Suspendisse est erat, finibus non finibus quis, tincidunt euismod turpis. Nunc
                                finibus dictum metus. Donec vel libero ultrices, interdum tortor vitae, dapibus lacus.
                                Maecenas et quam volutpat ligula pellentesque semper. Quisque vitae sem arcu. Suspendisse a
                                ipsum felis. Donec ultrices est leo, eget molestie felis ultricies ac. Nullam vitae ipsum
                                vel est auctor fermentum. Donec ac finibus orci,
                                ac auctor odio. Morbi consectetur magna ut dolor imperdiet, a luctus ex mollis. Aenean sit
                                amet luctus mi..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="button-float">
        <a href="{{ route('submission-form') }}">
        </a>


        <button type="submit" class="btn btn-success">Submit</button>

    </div>
@endsection
