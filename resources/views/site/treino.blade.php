@extends('layout.layout')

@section('title','Treino')

@section('conteudo')

     <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Error Page</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">ERROR PAGE</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        Error Area
    ==============================-->
    <div class="error-area space text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="error-thumb" src="assets/img/normal/error.png" alt="img">
                    <h2 class="fw-medium">Page Not Found</h2>
                    <p class="error-content">Sorry, we couldn't find the page you where looking for. We suggest that you return to homepage.</p>
                    <a class="btn" href="{{ url('/') }}">Back To HomePage</a>
                </div>
            </div>
        </div>
    </div>



@endsection

