@extends('user.home.tampilan-utama')
@section('title', 'Kalbis | Critics and Suggestions')
@section('content')
    @include('user.header-footer.navbar')
    <div class="page-wrapper">
        <div class="container-xl">
            <div class="page-header d-print-none">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="p">All News</h2>
                    </div>
                </div>
            </div>
        </div>
        @livewire('news.news')
    </div>
    @include('user.header-footer.footer')
@endsection
