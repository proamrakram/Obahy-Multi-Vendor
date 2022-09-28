@extends('Website.partials.layout')
@section('content')
    <div class="heading-page mt-2">
        <div class="container">
            <h1 class='h2'> Fashion model </h1>
            <p> All costumes available to view </p>
            <img src="{{ asset('assets/images/icon/icon-brown-like.svg') }}" class='icon-like' alt="">
            <img src="{{ asset('assets/images/icon/icon-love-favorite.svg') }}" class='icon-love-favorite' alt="">

        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item"><a href="#">SuperModel</a></li>
            </ol>
        </div>
    </nav>

    <div class="singe-product mt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-details-images">
                        <div class="row row-sm">
                            <div class="col-md-2 sm-col">
                                <div class="small-img-product">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}">
                                </div>
                            </div>
                            <div class="col-md-10 sm-col">
                                <div class="big-img-product">
                                    <img class="img-fluid img-cover"
                                        src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="description-product">
                        <h4 class='text-gray h6'> Category Name </h4>
                        <h1 class="h3 mb-0">Title here</h1>
                        <div class="star mt-2 mr-2 d-inline-block">
                            <i class="fas fa-star gold"></i>
                            <i class="fas fa-star gold"></i>
                            <i class="fas fa-star gold"></i>
                            <i class="fas fa-star gray"></i>
                            <i class="fas fa-star gray"></i>
                        </div>
                        <div class="available-store mt-3 mb-1">
                            <h3>$199</h3>
                            <span class='text-green'>Available</span> <span> In Store</span>
                        </div>
                        <p class='text-muted'>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since.
                        </p>

                        <p class='text-muted'>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since.
                        </p>

                        <div class="color-available mt-4">
                            <h6>Colors Available</h6>
                            <ul class="list-unstyled">
                                <li class="d-inline-block mr-2"><a href="#" style="background: #E83758;"></a></li>
                                <li class="d-inline-block mr-2"><a href="#" style="background: #E143B3;"></a></li>
                                <li class="d-inline-block mr-2"><a href="#" style="background: #B643E1;"></a></li>
                                <li class="d-inline-block mr-2"><a href="#" style="background: #8243E1;"></a></li>
                                <li class="d-inline-block mr-2"><a href="#" style="background: #434EE1;"></a></li>
                            </ul>
                        </div>
                        <div class="data-btn d-flex mt-3">
                            <div class="numbers-row mr-3">
                                <input type="text" name="counter_number" id="counter_number" value="3">
                            </div>
                            <a href="#" style="line-height: 2;" class='btn btn-primary btn-sm mr-3'><i
                                    class="fas fa-shopping-cart pr-2"></i> Add To Cart </a>
                            <a href="#" style="line-height: 2;" class='btn btn-outline-primary btn-sm '><i
                                    class="far fa-heart"></i> </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <section class="mt-5 mb-4 social-links">
            <div class="container">
                <h4 class='mb-3'>Share</h4>
                <ul class="list-unstyled">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="far fa-futbol"></i></a>
                </ul>
            </div>
        </section>

        <section class="related-products pt-4">
            <div class="container">
                <h2 class='mb-4'> Related Products </h2>
                <div class="row">

                    <div class="col-md-4 col-6">
                        <div class="product-style-1 text-center mb-4">
                            <div class="product-image">
                                <a href="#"> <img class="img-fluid"
                                        src="{{ asset('assets/images/RD1738_AUBERGINE_F1_W_360x.png') }}"> </a>
                                <div class="product-option">
                                    <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i>
                                        </a> </span>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="mb-1 text-center h4 mt-2"> <a href="#"
                                        class="text-dark text-decoration-none"> RD2403 Reina in Montella </a> </h3>
                                <h4 class=" h6  text-center text-gray font-weight-bold"> RINA DI MONTELLA </h4>
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
                                    <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i>
                                        </a> </span>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="mb-1 text-center h4 mt-2"> <a href="#"
                                        class="text-dark text-decoration-none"> RD2403 Reina in Montella </a> </h3>
                                <h4 class=" h6  text-center text-gray font-weight-bold"> RINA DI MONTELLA </h4>
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
                            <div class="product-content">
                                <h3 class="mb-1 text-center h4 mt-2"> <a href="#"
                                        class="text-dark text-decoration-none"> RD2403 Reina in Montella </a> </h3>
                                <h4 class=" h6  text-center text-gray font-weight-bold"> RINA DI MONTELLA </h4>
                                <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
