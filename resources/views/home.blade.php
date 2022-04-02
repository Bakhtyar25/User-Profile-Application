@extends('layout.layout')


@section('content')


<section class="text-center container ">
    <div class="row ">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-warning p-3">MY Latest Projects</h1>
      </div>
    </div>
</section>

<div class="container text-warning">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
            <div class="card shadow-sm" style="background-color: rgba(255, 255, 255, 0.155) !important ;">
            <img src="images/fifa.png" width="100%" height="200">

            <div class="card-body">
                <p class="card-text">This Project is about choosing two randome teams for fifa</p>
                <div class="d-flex justify-content-center align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-warning">
                        <a href="https://github.com/Bakhtyar25/fifa-random/tree/master" class="btn-floating btn-sm text-white" style="font-size: 20px;">
                            <i class="fab fa-github"></i>
                        </a>
                    </button>
                </div>
                
                </div>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm" style="background-color: rgba(255, 255, 255, 0.155) !important ;">
            <img src="images/manhwa.png" width="100%" height="200">

            <div class="card-body ">
                <p class="card-text">This Project is about manhwa reading website</p>
                <div class="d-flex justify-content-center align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-warning">
                        <a href="https://github.com/Bakhtyar25" class="btn-floating btn-sm text-white" style="font-size: 20px;">
                            <i class="fab fa-github"></i>
                        </a>
                    </button>
                </div>
                
                </div>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm" style="background-color: rgba(255, 255, 255, 0.155) !important ;">
            <img src="images/techstore.png" width="100%" height="200">

            <div class="card-body">
                <p class="card-text">This Project is about online TechStore</p>
                <div class="d-flex justify-content-center align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-warning">
                        <a href="https://github.com/Bakhtyar25/online-store/tree/master" class="btn-floating btn-sm text-white" style="font-size: 20px;">
                            <i class="fab fa-github"></i>
                        </a>
                    </button>
                </div>
                
                </div>
            </div>
            </div>
        </div>
    </div>
</div>




@endsection