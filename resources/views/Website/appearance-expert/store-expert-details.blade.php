@extends('Website.partials.layout')
@section('content')
    <div class="heading-page mt-2" style="background-image: url('img/women-topsection-en.png')">
        <div class="container">
            <h1 class='h2'> {{ $product->category->category_name }}</h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <img src="{{ asset('assets/images/icon/icon-brown-like.svg') }}" class='icon-like' alt="">
            <img src="{{ asset('assets/images/icon/icon-love-favorite.svg') }}" class='icon-love-favorite' alt="">

        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container mt-3">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{ route('customer.category', '0') }}">Categories</a></li>

                @foreach ($path_categorise as $category)
                    <li class="breadcrumb-item">
                        <a href="{{ route('customer.category', $category->id) }}">{{ $category->category_name }}
                        </a>
                    </li>
                @endforeach

                <li class="breadcrumb-item " aria-current="page">{{ $product->product_name }}</li>

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
                                    @foreach ($product->images as $image)
                                        <img class="img-fluid img-cover mb-2" src="{{ $image->image }}">
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-10 sm-col">
                                <div class="big-img-product">
                                    <img class="img-fluid img-cover" src="{{ $product->product_main_image }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="description-product">
                        <h1 class="h3 mb-0">{{ $product->product_name }}</h1>
                        <div class="star mt-2 mr-2 d-inline-block">

                            @foreach (range(1, 5) as $rate)
                                @if ($product->rates->pluck('rate_value')->avg() >= $rate)
                                    <i class="fas fa-star gold"></i>
                                @else
                                    <i class="fas fa-star gray"></i>
                                @endif
                            @endforeach

                        </div>
                        <span>({{ $product->comments->count() }})</span> <span>Comments</span>

                        <div class="available-store mt-3 mb-1">
                            <h3>${{ $product->product_price }}</h3>
                            <span class='text-green'>Available</span> <span> In Store</span>
                        </div>

                        <p class='text-muted'>
                            {{ $product->product_description }}
                        </p>

                        <div class="data-btn d-flex mt-3 mt-md-5">
                            <a href="#" style="line-height: 2;" class='btn btn-primary btn-sm mr-3'>
                                <i class="fas fa-shopping-cart pr-2"></i> Add Services
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5 product-tabs">
            <ul class="nav nav-pills mb-3 tabs-ul" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Product Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Rates</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active  " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <p>
                        {{ $product->product_description }}
                    </p>
                </div>
                <div class="tab-pane" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="product-rate">
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="rate-comment">
                                    <div class="star mt-2 mr-2 d-inline-block">

                                        @foreach (range(1, 5) as $rate)
                                            @if ($product->rates->pluck('rate_value')->avg() >= $rate)
                                                <i class="fas fa-star gold"></i>
                                            @else
                                                <i class="fas fa-star gray"></i>
                                            @endif
                                        @endforeach

                                    </div>
                                    <span class='text-muted'>({{ $product->comments->count() }}) Comment</span>
                                </div>
                            </div>

                            @if (auth()->user())
                                <div class="col-6">
                                    <div class="comment-btn d-flex justify-content-end">
                                        <a class="btn btn-outline-primary" href="#" data-target="#addComment"
                                            data-toggle="modal">Add Comment</a>
                                    </div>
                                </div>
                            @endif
                        </div>


                        <div class="owl-carousel">

                            @foreach ($product->comments as $comment)
                                <div class="item ">
                                    <div class="comment-description p-3 border rounded-lg">
                                        <h4>{{ 'Amr Akram' }}</h4>
                                        <div class="star mt-2 mr-3 d-inline-block">
                                            @foreach (range(1, 5) as $rate)
                                                @if ($product->rates->where('product_id', $comment->product_id)->first()->rate_value >= $rate)
                                                    <i class="fas fa-star gold"></i>
                                                @else
                                                    <i class="fas fa-star gray"></i>
                                                @endif
                                            @endforeach
                                        </div>
                                        <span
                                            class="mr-2 d-inline-block text-muted text-light">{{ $comment->created_at }}</span>
                                        <span class='text-muted text-light'>6:49 PM</span>
                                        <p class="mt-3 mb-0 text-gray">
                                            {{ $comment->comment }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Modal Add Comments -->
        <div class="modal fade" id="addComment" tabindex="-1" aria-labelledby="EditDataUser" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-clr-dark text-white">
                        <h5 class="modal-title" id="EditDataUserLabel"> Add Review </h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="" method="">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group mb-2">
                                <textarea name="" id="" class="form-control" placeholder="Enter Your Comment" row="8"></textarea>
                            </div>

                            <div class="btn-comlete-proccess d-flex justify-content-center  mt-3 mb-2">
                                <input type="submit" class='btn btn-primary btn-sm'>
                                <button type="button" class="btn btn-outline-primary ml-3 btn-sm"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Add Comments -->

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
                <h2 class='mb-4'> Related Services </h2>
                <div class="row">

                    @foreach ($relatedProducts as $relatedProduct)
                        <div class="col-md-3 col-6">
                            <div class="product-style-1 text-center">
                                <div class="product-image border rounded">
                                    <a href="#"> <img class="img-fluid"
                                            src="{{ asset('assets/images/shop-mens.png') }}"> </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="text-center mb-1 h4 font-weight-normal mt-3">
                                        {{ $relatedProduct->product_name }}</h3>
                                    <a href="#" class="btn btn-primary btn-sm-3 mt-1">Service Request</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </div>
@endsection
