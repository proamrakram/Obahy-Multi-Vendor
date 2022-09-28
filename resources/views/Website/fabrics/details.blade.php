@extends('Website.partials.layout')
@section('content')
    <div class="heading-page mt-2" style="background-image: url('img/women-topsection-en.png')">
        <div class="container">
            <h1 class='h2'> Fabric Details </h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <img src="{{ asset('assets/images/icon/icon-brown-like.svg') }}" class='icon-like' alt="">
            <img src="{{ asset('assets/images/icon/icon-love-favorite.svg') }}" class='icon-love-favorite' alt="">

        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item"><a href="#">Fabric Details</a></li>
            </ol>
        </div>
    </nav>

    <a href="#" class='contact-now'>
        <img src="img/icons/icon-msg.svg" alt="">
    </a>

    <div class="singe-product mt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-details-images">
                        <div class="row row-sm">
                            <div class="col-md-2 sm-col">
                                <div class="small-img-product">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/N36061298A_1.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/N36061298A_1.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/N36061298A_1.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/N36061298A_1.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/N36061298A_1.png') }}">
                                </div>
                            </div>
                            <div class="col-md-10 sm-col">
                                <div class="big-img-product">
                                    <img class="img-fluid img-cover" src="{{ asset('assets/images/N36061298A_1.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="description-product">
                        <h1 class="h3 mb-0">Title here</h1>
                        <div class="star mt-2 mr-2 d-inline-block">
                            <i class="fas fa-star gold"></i>
                            <i class="fas fa-star gold"></i>
                            <i class="fas fa-star gold"></i>
                            <i class="fas fa-star gray"></i>
                            <i class="fas fa-star gray"></i>
                        </div>
                        <span>(12)</span> <span>Comment</span>
                        <div class="available-store mt-3 mb-1">
                            <h3>$199</h3>
                            <span class='text-green'>Available</span> <span> In Store</span>
                        </div>
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
                <div class="tab-pane fade show active  " id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="tab-pane" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="product-rate">
                        <div class="row mb-5">
                            <div class="col-6">
                                <div class="rate-comment">
                                    <div class="star mt-2 mr-2 d-inline-block">
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gray"></i>
                                        <i class="fas fa-star gray"></i>
                                    </div>
                                    <span class='text-muted'>(12) Comment</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="comment-btn d-flex justify-content-end">
                                    <a class="btn btn-outline-primary" href="#" data-target="#addComment"
                                        data-toggle="modal">Add Comment</a>
                                </div>
                            </div>
                        </div>


                        <div class="owl-carousel">

                            <div class="item ">
                                <div class="comment-description p-3 border rounded-lg">
                                    <h4>Comment Name 1</h4>
                                    <div class="star mt-2 mr-3 d-inline-block">
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gray"></i>
                                        <i class="fas fa-star gray"></i>
                                    </div>
                                    <span class="mr-2 d-inline-block text-muted text-light">3/2/2022</span>
                                    <span class='text-muted text-light'>6:49 PM</span>
                                    <p class="mt-3 mb-0 text-gray">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="comment-description p-3 border rounded-lg">
                                    <h4>Comment Name 2 </h4>
                                    <div class="star mt-2 mr-3 d-inline-block">
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gray"></i>
                                        <i class="fas fa-star gray"></i>
                                    </div>
                                    <span class="mr-2 d-inline-block text-muted text-light">3/2/2022</span>
                                    <span class='text-muted text-light'>6:49 PM</span>
                                    <p class="mt-3 mb-0 text-gray">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="comment-description p-3 border rounded-lg">
                                    <h4>Comment Name 2 </h4>
                                    <div class="star mt-2 mr-3 d-inline-block">
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gray"></i>
                                        <i class="fas fa-star gray"></i>
                                    </div>
                                    <span class="mr-2 d-inline-block text-muted text-light">3/2/2022</span>
                                    <span class='text-muted text-light'>6:49 PM</span>
                                    <p class="mt-3 mb-0 text-gray">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make.
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="comment-description p-3 border rounded-lg">
                                    <h4>Comment Name 2 </h4>
                                    <div class="star mt-2 mr-3 d-inline-block">
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gold"></i>
                                        <i class="fas fa-star gray"></i>
                                        <i class="fas fa-star gray"></i>
                                    </div>
                                    <span class="mr-2 d-inline-block text-muted text-light">3/2/2022</span>
                                    <span class='text-muted text-light'>6:49 PM</span>
                                    <p class="mt-3 mb-0 text-gray">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make.
                                    </p>
                                </div>
                            </div>


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
                <h2 class='mb-4'> Related Products </h2>
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
                                <h3 class="mb-1 text-center h4"> <a href="#"
                                        class="text-dark text-decoration-none"> Title Here </a> </h3>
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
                                <h3 class="mb-1 text-center h4"> <a href="#"
                                        class="text-dark text-decoration-none"> Title Here </a> </h3>
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
                                <h3 class="mb-1 text-center h4"> <a href="#"
                                        class="text-dark text-decoration-none"> Title Here </a> </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
