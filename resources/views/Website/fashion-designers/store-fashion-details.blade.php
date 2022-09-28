@extends('Website.partials.layout')
@section('content')
    <div class="heading-page mt-2" style="background-image: url('img/women-topsection-en.png')">
        <div class="container">
            <h1 class='h2'> Model: Reina de Montella </h1>
            <p> All costumes available to view </p>
            <img src="{{ asset('assets/images/icon/icon-brown-like.svg') }}" class='icon-like' alt="">
            <img src="{{ asset('assets/images/icon/icon-love-favorite.svg') }}" class='icon-love-favorite' alt="">

        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container mt-3">
            <ol class="breadcrumb pb-0 mb-1">
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item"><a href="#">womens</a></li>
                <li class="breadcrumb-item " aria-current="page">Dresses</li>
            </ol>

            <h2 class='h4 mb-5'> Model: Reina de Montella </h2>
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
                                        src="{{ asset('assets/images/big-img-product.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/big-img-product.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/big-img-product.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/big-img-product.png') }}">
                                    <img class="img-fluid img-cover mb-2"
                                        src="{{ asset('assets/images/big-img-product.png') }}">
                                </div>
                            </div>
                            <div class="col-md-10 sm-col">
                                <div class="big-img-product">
                                    <img class="img-fluid img-cover" src="{{ asset('assets/images/big-img-product.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="description-product">
                        <h1 class="h3 mb-0">Night Dress</h1>
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
                            <a href="#" style="line-height: 2;" class="btn btn-primary btn-sm mr-3"><i
                                    class="fas fa-shopping-cart pr-2"></i> Add To Cart </a>
                            <a href="#" style="line-height: 2;" class="btn btn-outline-primary btn-sm "><i
                                    class="far fa-heart"></i> </a>
                        </div>

                    </div>
                </div>


            </div>
        </div>


        <div class="model-options pt-5">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-5">
                                    <h4 class='h5'> Model Options </h4>
                                    <img src="img/ModelOptions.png" class='img-fluid' alt="">
                                </div> -->
                    <div class="col-md-12">
                        <div class="content ">
                            <h4 class="h5">Design details</h4>
                            <p>Lorem ipsum dolor sit amet consecteturLorem ipsum dolor sit amet consecteturLorem ipsum dolor
                                sit amet consectetur adipisicing elit. Eaque, maiores!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, maiores! t amet
                                consecteturLorem ipsum dolor sit amet consect amet consecteturLorem ipsum dolor sit amet
                                consec</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, maiores! t amet
                                consecteturLorem ipsum dolor sit amet consec</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, maiores! t amet
                                consecteturLorem ipsum dolor sit amet consect amet consecteturLorem ipsum dolor sit amet
                                consec</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, maiores! t amet
                                consecteturLorem ipsum dolor sit amet consec t amet consecteturLorem ipsum dolor sit amet
                                consec t amet consecteturLorem ipsum dolor sit amet consec</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, maiores! t amet
                                consecteturLorem ipsum dolor sit amet consec t amet consecteturLorem ipsum dolor sit amet
                                consec t amet consecteturLorem ipsum dolor sit amet consec</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, maiores! t amet
                                consecteturLorem ipsum dolor sit amet consec t amet consecteturLorem ipsum dolor sit amet
                                consec t amet consecteturLorem ipsum dolor sit amet consec</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5 product-tabs">
            <ul class="nav nav-pills mb-3 tabs-ul" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#RelatedProducts"
                        role="tab" aria-controls="pills-home" aria-selected="true">Related Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Rates</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active  " id="RelatedProducts" role="tabpanel"
                    aria-labelledby="pills-home-RelatedProducts">

                    <div class="row">

                        <div class="col-md-4 col-6">
                            <div class="product-style-1 text-center mb-3">
                                <div class="product-image">
                                    <a href="#"> <img class="img-fluid"
                                            src="{{ asset('assets/images/women-dress.png') }}"> </a>
                                    <div class="product-option">
                                        <span class="add-to-wishlist"> <a href="#"> <i
                                                    class="far fa-heart fa-lg"></i> </a> </span>
                                    </div>
                                </div>
                                <div class="product-content pb-2">
                                    <h3 class="mb-1 mt-3 text-center h5">
                                        <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403
                                        </a>
                                    </h3>
                                    <p class='mb-0 text-muted'> RINA DI MONTELLA </p>
                                    <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="product-style-1 text-center mb-3">
                                <div class="product-image">
                                    <a href="#"> <img class="img-fluid"
                                            src="{{ asset('assets/images/women-dress.png') }}"> </a>
                                    <div class="product-option">
                                        <span class="add-to-wishlist"> <a href="#"> <i
                                                    class="far fa-heart fa-lg"></i> </a> </span>
                                    </div>
                                </div>
                                <div class="product-content pb-2">
                                    <h3 class="mb-1 mt-3 text-center h5">
                                        <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403
                                        </a>
                                    </h3>
                                    <p class='mb-0 text-muted'> RINA DI MONTELLA </p>
                                    <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="product-style-1 text-center mb-3">
                                <div class="product-image">
                                    <a href="#"> <img class="img-fluid"
                                            src="{{ asset('assets/images/women-dress.png') }}"> </a>
                                    <div class="product-option">
                                        <span class="discount">-30%</span>
                                        <span class="add-to-wishlist"> <a href="#"> <i
                                                    class="far fa-heart fa-lg"></i> </a> </span>
                                    </div>
                                </div>
                                <div class="product-content pb-2">
                                    <h3 class="mb-1 mt-3 text-center h5">
                                        <a href="#" class="text-dark text-decoration-none"> Reina in Montella RD2403
                                        </a>
                                    </h3>
                                    <p class='mb-0 text-muted'> RINA DI MONTELLA </p>
                                    <h4 class=" h6  text-center text-gray font-weight-bold">$10.00</h4>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="tab-pane " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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

                            <div class="rating-5 d-flex align-items-center py-4">
                                <h4 class='h6 pr-4'> Rating from 1 to 5 </h4>
                                <div class="numbers">
                                    <a href="#" class='btn btn-outline-primary btn-sm-3 '> 1 </a>
                                    <a href="#" class='btn btn-outline-primary btn-sm-3 '> 2 </a>
                                    <a href="#" class='btn btn-outline-primary btn-sm-3 '> 3 </a>
                                    <a href="#" class='btn btn-outline-primary btn-sm-3 '> 4 </a>
                                    <a href="#" class='btn btn-outline-primary btn-sm-3 '> 5 </a>
                                </div>
                            </div>

                            <div class="btn-comlete-proccess d-flex justify-content-center  mt-3 mb-2">
                                <input type="submit" class='btn btn-primary btn-sm' value="Add Comment">
                                <button type="button" class="btn btn-outline-primary ml-3 btn-sm"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Add Comments -->

        <section class="mt-5 mb-4 social-links text-center">
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

                <a href="#" style="line-height: 2;" class='btn btn-outline-primary mt-4 '> Back to the fashion
                    designer's page </a>
            </div>
        </section>
    </div>
@endsection
