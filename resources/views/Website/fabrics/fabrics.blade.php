@extends('Website.fabrics.suppliers')
@section('content')
    <div class="heading-page mt-2">
        <div class="container">
            <h1 class='h2'> All Fabric </h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <img src="{{ asset('assets/images/icon/icon-brown-like.svg') }}" class='icon-like' alt="">
            <img src="{{ asset('assets/images/icon/icon-love-favorite.svg') }}" class='icon-love-favorite' alt="">
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container mt-3">
            <ol class="breadcrumb pb-0 mb-1">
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item"><a href="#">All Fabric</a></li>
            </ol>
            <h2 class="h4 mb-5"> All Fabric </h2>
        </div>
    </nav>


    <div class="filter-search">
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

    <div class="result-search mt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_1.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none"> Title
                                    Here </a> </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_2.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none"> Title
                                    Here </a> </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_3.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none">
                                    Title Here </a> </h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_1.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none">
                                    Title Here </a> </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_2.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none">
                                    Title Here </a> </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_3.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none">
                                    Title Here </a> </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_1.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none">
                                    Title Here </a> </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_2.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none">
                                    Title Here </a> </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="product-style-1 text-center mb-4">
                        <div class="product-image">
                            <a href="#"> <img class="img-fluid rounded border"
                                    src="{{ asset('assets/images/Fabric_3.png') }}"> </a>
                        </div>
                        <div class="star mt-2 text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-content">
                            <h3 class="mb-1 text-center h4"> <a href="#" class="text-dark text-decoration-none">
                                    Title Here </a> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-5 mb-4">
            <li class="page-item"><a class="page-link" href="#"> <i class='fa fa-angle-left'></i> </a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"> <i class='fa fa-angle-right'></i> </a></li>
        </ul>
    </nav>
@endsection
