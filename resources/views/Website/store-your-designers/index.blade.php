@extends('Website.partials.layout')
@section('content')
    <div class="heading-page mt-2">
        <div class="container">
            <h1 class="h2"> Your Own Designer </h1>
            <img src="{{ asset('assets/images/icon/icon-brown-like.svg') }}" class="icon-like" alt="">
            <img src="{{ asset('assets/images/icon/icon-love-favorite.svg') }}" class="icon-love-favorite" alt="">
        </div>
    </div>


    <div class="breadcrumb-filter mt-md-5 mt-3">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 ">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb  mb-0">
                            <li class="breadcrumb-item"><a href="#">Categories</a></li>
                            <li class="breadcrumb-item"><a href="#">your own designer</a></li>
                        </ol>
                    </nav>
                    <div class="heading mb-md-5 mb-2">
                        <h3> Your Designer </h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="dropdown-filter d-flex justify-content-md-end justify-content-center">
                        <div class="dropdown mb-md-0 mb-3">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false">Country
                                <ul class="dropdown-menu" style="">
                                    <!-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> -->
                                    <li><a href="#">Country 1</a></li>
                                    <li><a href="#">Country 2</a></li>
                                    <li><a href="#">Country 3</a></li>
                                    <li><a href="#">Country 4</a></li>
                                    <li><a href="#">Country 5</a></li>
                                    <li><a href="#">Country 6</a></li>
                                </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid"
                                src="{{ asset('assets/images/RD2430_AQUA_F1_W_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="star mt-2 text-center">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none"> Reina in
                                Montella RD2403 </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid" src="{{ asset('assets/images/RD2403SVND_01_360x.png') }}">
                        </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                        </div>
                    </div>
                    <div class="star mt-2 text-center">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none"> Reina in
                                Montella RD2403 </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid"
                                src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="star mt-2 text-center">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none"> Reina
                                in Montella RD2403 </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid"
                                src="{{ asset('assets/images/RD2430_AQUA_F1_W_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="star mt-2 text-center">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none"> Reina
                                in Montella RD2403 </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid"
                                src="{{ asset('assets/images/RD2403SVND_01_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                        </div>
                    </div>
                    <div class="star mt-2 text-center">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none"> Reina
                                in Montella RD2403 </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid"
                                src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="star mt-2 text-center">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none"> Reina
                                in Montella RD2403 </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="pagination justify-content-center mt-5 mb-5">
        <li class="page-item"><a class="page-link" href="#"> <i class="fa fa-angle-left"></i> </a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#"> <i class="fa fa-angle-right"></i> </a></li>
    </ul>
@endsection
