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


    <div class="breadcrumb-filter mt-md-5 mt-3">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 ">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb  mb-0">
                            <li class="breadcrumb-item"><a href="#">Categories</a></li>
                            <li class="breadcrumb-item"><a href="#">SuperModel</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="intro-img">
        <div class="container">
            <div class="img mb-4">
                <img src="{{ asset('assets/images/bg-leftheader2.jpg') }}" class='img-fluid ' alt="">
            </div>
        </div>
    </div>


    <div class="filter-search mb-3">
        <div class="container">
            <div class="heading d-flex justify-content-between align-items-center pr-3">
                <h4 class='h5'> Filtering </h4>
                <i class="fas fa-filter"></i>
            </div>
            <div class="content p-4 border">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <select class="select2" name="type">
                            <option value="AL">Type 1</option>
                            <option value="AL">Type 2</option>
                            <option value="AL">Type 3</option>
                            <option value="AL">Type 4</option>
                            <option value="AL">Type 5</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-6">
                        <select class="select2" name="type">
                            <option value="AL">Country 1</option>
                            <option value="AL">Country 2</option>
                            <option value="AL">Country 3</option>
                            <option value="AL">Country 4</option>
                            <option value="AL">Country 5</option>
                        </select>
                    </div>

                    <div class="col-md-3 col-6">
                        <select class="select2" name="type">
                            <option value="AL">Name 1</option>
                            <option value="AL">Name 2</option>
                            <option value="AL">Name 3</option>
                            <option value="AL">Name 4</option>
                            <option value="AL">Name 5</option>
                        </select>
                    </div>

                    <div class="col-md-3 col-6">
                        <select class="select2" name="type">
                            <option value="AL">Recently added 1</option>
                            <option value="AL">Recently added 2</option>
                            <option value="AL">Recently added 3</option>
                            <option value="AL">Recently added 4</option>
                            <option value="AL">Recently added 5</option>
                        </select>
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

                    <div class="product-content">
                        <h3 class="mb-1 text-center h4 mt-2"> <a href="#" class="text-dark text-decoration-none">
                                RD2403 Reina in Montella </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold"> RINA DI MONTELLA </h4>
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
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4 mt-2"> <a href="#" class="text-dark text-decoration-none">
                                RD2403 Reina in Montella </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold"> RINA DI MONTELLA </h4>
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
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4 mt-2"> <a href="#" class="text-dark text-decoration-none">
                                RD2403 Reina in Montella </a> </h3>
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
                            <span class="add-to-wishlist"> <a href="#"> <i class="far fa-heart fa-lg"></i> </a>
                            </span>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4 mt-2"> <a href="#" class="text-dark text-decoration-none">
                                RD2403 Reina in Montella </a> </h3>
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
                        <h3 class="mb-1 text-center h4 mt-2"> <a href="#" class="text-dark text-decoration-none">
                                RD2403 Reina in Montella </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold"> RINA DI MONTELLA </h4>
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
                    <div class="product-content">
                        <h3 class="mb-1 text-center h4 mt-2"> <a href="#" class="text-dark text-decoration-none">
                                RD2403 Reina in Montella </a> </h3>
                        <h4 class=" h6  text-center text-gray font-weight-bold"> RINA DI MONTELLA </h4>
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
