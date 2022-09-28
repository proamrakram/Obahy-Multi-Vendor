@extends('Website.partials.layout')
@section('content')
    <div class="heading-page pt-4 pb-4 mt-2 " style="background-image: url('img/bg-store-hero-section.svg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 position-static">
                    <h1 class='h2'> Appearance Expert </h1>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <img src="{{ asset('assets/images/icon/icon-brown-like.svg') }}" class='icon-like' alt="">
                    <img src="{{ asset('assets/images/icon/icon-love-favorite.svg') }}" class='icon-love-favorite'
                        alt="">
                </div>
                <div class="col-md-6 text-right">
                    <img src="{{ asset('assets/images/laptop.png') }}" class='img-fluid w-50' alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumb-filter mt-md-5 mt-3">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 ">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb  mb-0">
                            <li class="breadcrumb-item"><a href="#">Categories</a></li>
                            <li class="breadcrumb-item"><a href="#">womens</a></li>
                            <li class="breadcrumb-item " aria-current="page">Dresses</li>
                        </ol>
                    </nav>
                    <div class="heading mb-md-5 mb-2">
                        <h3> Model: Reina de Montella </h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="dropdown-filter d-flex justify-content-md-end justify-content-center">
                        <div class="dropdown mb-md-0 mb-3">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false">Newly Added
                                <ul class="dropdown-menu" style="">
                                    <!-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> -->
                                    <li><a href="#">Dress 1</a></li>
                                    <li><a href="#">Dress 2</a></li>
                                    <li><a href="#">Dress 3</a></li>
                                    <li><a href="#">Dress 4</a></li>
                                    <li><a href="#">Dress 5</a></li>
                                    <li><a href="#">Dress 6</a></li>
                                </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="shoping-cats pt-4 pb-3 slider-style-1">
        <div class="container">
            <div class="heading-section mb-4 pb-2">
                <h3> <span> Services </span> </h3>
            </div>
            <div class="owl-carousel">

                @foreach ($products as $product)
                    <div class="item">
                        <div class="product-style-1 text-center">
                            <div class="product-image border rounded">
                                <a href="#"> <img class="img-fluid" src="{{ asset('assets/images/shop-mens.png') }}">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="text-center mb-1 h4 font-weight-normal mt-3">{{$product->product_name}}</h3>
                                <a href="#" class="btn btn-primary btn-sm-3 mt-1">Service Request</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="navSlider"></div>

        </div>
    </section>

    <div class="container">
        <div class="heading-section mb-4 pb-2">
            <h3> <span> Available fashion </span> </h3>
        </div>
        <div class="row">

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid border-black"
                                src="{{ asset('assets/images/RD2430_AQUA_F1_W_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="product-content pb-2">
                        <h3 class="mb-1 mt-3 text-center h5">
                            <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403 </a>
                        </h3>
                        <p class='mb-3 text-muted'> RINA DI MONTELLA </p>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid border-black"
                                src="{{ asset('assets/images/RD2403SVND_01_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="product-content pb-2">
                        <h3 class="mb-1 mt-3 text-center h5">
                            <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403 </a>
                        </h3>
                        <p class='mb-3 text-muted'> RINA DI MONTELLA </p>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid border-black"
                                src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}">
                        </a>
                        <div class="product-option">
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="product-content pb-2">
                        <h3 class="mb-1 mt-3 text-center h5">
                            <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403 </a>
                        </h3>
                        <p class='mb-3 text-muted'> RINA DI MONTELLA </p>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid border-black"
                                src="{{ asset('assets/images/RD2430_AQUA_F1_W_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                        </div>
                    </div>
                    <div class="product-content pb-2">
                        <h3 class="mb-1 mt-3 text-center h5">
                            <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403 </a>
                        </h3>
                        <p class='mb-3 text-muted'> RINA DI MONTELLA </p>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid border-black"
                                src="{{ asset('assets/images/RD2403SVND_01_360x.png') }}"> </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="product-content pb-2">
                        <h3 class="mb-1 mt-3 text-center h5">
                            <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403 </a>
                        </h3>
                        <p class='mb-3 text-muted'> RINA DI MONTELLA </p>
                        <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-style-1 text-center mb-4">
                    <div class="product-image">
                        <a href="#"> <img class="img-fluid border-black"
                                src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}">
                        </a>
                        <div class="product-option">
                            <span class="discount">-30%</span>
                        </div>
                    </div>
                    <div class="product-content pb-2">
                        <h3 class="mb-1 mt-3 text-center h5">
                            <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403 </a>
                        </h3>
                        <p class='mb-3 text-muted'> RINA DI MONTELLA </p>
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
