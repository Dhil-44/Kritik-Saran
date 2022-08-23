@extends('user.home.tampilan-utama')
@section('title', 'Kalbis | Critics and Suggestions')
@section('content')
    @include('user.header-footer.navbar')
    <div class="mask flex-center" style="background-size:cover; height:300px; background:rgb(33, 109, 50);">
        <div class="container">
            <div class="white-text text-center py-5" style="visibility: visible; animation-name: fadeInUp;">
                <img src="http://cac.kalbis.ac.id/frontend/img/logos/logo kalbis putih.png" alt="thumbnail"
                    class="mx-auto d-block" style="width: 100px">
                <h1 class="text-center font-weight-bold text-white">
                    <strong>Kalbis Critics and Suggestions</strong>
                </h1>
            </div>
        </div>
    </div>
    @livewire('home.home-feed-message')
    <div class="mt-3">

    </div>
@endsection
