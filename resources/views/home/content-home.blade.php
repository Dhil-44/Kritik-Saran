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

    <div class="container mt-4">
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
            <div class="col-6 ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Card title</h3>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus felis eu rutrum aliquam. Nam ultrices felis nec urna tincidunt condimentum. Aenean pretium mauris eget pellentesque consequat. Suspendisse est erat, finibus non finibus quis, tincidunt euismod turpis. Nunc finibus dictum metus. Donec vel libero ultrices, interdum tortor vitae, dapibus lacus. Maecenas et quam volutpat ligula pellentesque semper. Quisque vitae sem arcu. Suspendisse a ipsum felis. Donec ultrices est leo, eget molestie felis ultricies ac. Nullam vitae ipsum vel est auctor fermentum. Donec ac finibus 
                            orci, ac auctor odio. Morbi consectetur magna ut dolor imperdiet, a luctus ex mollis. Aenean sit amet luctus mi..</p>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-10">
                <div class="card bg-light">
                    <div class="card-header">
                        <h3 class="card-title">Card title</h3>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus felis eu rutrum aliquam. Nam ultrices felis nec urna tincidunt condimentum. Aenean pretium mauris eget pellentesque consequat. Suspendisse est erat, finibus non finibus quis, tincidunt euismod turpis. Nunc finibus dictum metus. Donec vel libero ultrices, interdum tortor vitae, dapibus lacus. Maecenas et quam volutpat ligula pellentesque semper. Quisque vitae sem arcu. Suspendisse a ipsum felis. Donec ultrices est leo, eget molestie felis ultricies ac. Nullam vitae ipsum vel est auctor fermentum. Donec ac finibus orci, 
                            ac auctor odio. Morbi consectetur magna ut dolor imperdiet, a luctus ex mollis. Aenean sit amet luctus mi..</p>
                    </div>
                </div>
            </div>
        </div>
    </div >


    <a href="{{ route('submission-form') }}">
    <button type="submit" class="btn btn-success">Create Post</button>
    </a>

    </div>
@endsection
