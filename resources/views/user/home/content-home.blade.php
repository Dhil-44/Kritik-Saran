@extends('user.home.tampilan-utama')
@section('title', 'Kalbis | Critics and Suggestions')
@section('content')
    @include('user.header-footer.navbar')
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
    @livewire('home.home-page')
    @include('user.header-footer.footer')

@endsection
