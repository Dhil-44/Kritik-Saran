@extends('home.tampilan-utama')
@section('title', 'Home')
@section('content')
    {{-- <section class="jumbotron text-center bg-dark">
        <img src="img/myphoto.jpg" class="rounded-circle img-thumbnail" alt="photo" width="200" />
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,256L30,224C60,192,120,128,180,117.3C240,107,300,149,360,165.3C420,181,480,171,540,186.7C600,203,660,245,720,224C780,203,840,117,900,117.3C960,117,1020,203,1080,208C1140,213,1200,139,1260,117.3C1320,96,1380,128,1410,144L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg> --}}
    <div class="mask flex-center" style="background-color: rgba(11,102,35,0.7); height:250px;">
        <div class="container">
            <div class="white-text text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="http://cac.kalbis.ac.id/frontend/img/logos/logo kalbis putih.png" alt="thumbnail"
                    class="mx-auto d-block" style="width: 100px">
                <h1 class="text-center font-weight-bold">
                    <strong>INDUSTRY COLLABORATION</strong>
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
                        <p>This is some text within a card body.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-10">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h3 class="card-title">Card title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is some text within a card body.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
