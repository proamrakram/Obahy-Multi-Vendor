@extends('Website.partials.layout')
@section('content')
    <div class="heading-page pt-4 pb-4 mt-2 heading-page-dark" style="background-image: url('img/bg_size_details.png')">
        <div class="container">
            <div class="row align-items-center justify-contetn-center">
                <div class="col-md-6 position-static">
                    <h1 class='h2'> Size details </h1>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <img src="{{ asset('assets/images/icon/icon-brown-like.svg') }}" class='icon-like' alt="">
                    <img src="{{ asset('assets/images/icon/icon-love-favorite.svg') }}" class='icon-love-favorite'
                        alt="">
                </div>
                <div class="col-md-6 text-right">
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Enter Size</a></li>
                            <li class="breadcrumb-item " aria-current="page">Dresses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="size-details product-tabs pt-3">
        <div class="container">
            <div class="d-flex justify-content-between mobile-accordion">
                <ul class="nav nav-pills mb-3 tabs-ul" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#RelatedProducts"
                            role="tab" aria-controls="pills-home" aria-selected="true">Enter Your Size</a>
                    </li>
                </ul>
                <div class="btns">
                    <a href="#" class='btn btn-primary btn-sm'> <i class="fa fa-exclamation"></i> Hire a look expert
                    </a>
                    <a href="#" class='btn btn-outline-primary btn-sm'> Choose the new</a>
                </div>
            </div>
            <div class="mobile-accordion-content">
                <h3 class="h5 mb-3">Required size details</h3>
                <div class="row pb-3">
                    <div class="col-md-6 mb-2">
                        <div class="row align-items-center pr-0 pr-md-4">
                            <div class="col-6">
                                <span class='text-muted pr-md-3 pr-0'> Choose the type of design </span>
                            </div>
                            <div class="col-6">
                                <div class="select">
                                    <select class="select2" name="type">
                                        <option value="AL">Dress</option>
                                        <option value="AL">Dress</option>
                                        <option value="AL">Dress</option>
                                        <option value="AL">Dress</option>
                                        <option value="AL">Dress</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row align-items-center pl-0 pl-md-3">
                            <div class="col-6">
                                <span class='text-muted pr-2'> The unit of measure used </span>
                            </div>
                            <div class="col-6">
                                <div class="select">
                                    <select class="select2" name="type">
                                        <option value="AL">cm</option>
                                        <option value="AL">cm</option>
                                        <option value="AL">cm</option>
                                        <option value="AL">cm</option>
                                        <option value="AL">cm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>


            <div class="row pt-md-3 pt-0 ">
                <div class="col-lg-6">
                    <div class="desc-tab">
                        <p class="">???????? ?????????????? ?????????????? ???????? ????????????????</p>
                        <p class="">
                            ??????????( ?????????? ?????????? ) ???????? ?????? ???????? ?????????? ?????? ???????? ?????????? ?????????????? ???? ???????????? ?????????????? ?????????????? ??????????
                            ???? ????????????.
                        </p>
                        <p>
                            ?????????? ( ?????????? ???????????? ) ???????? ???????? ???????? ??????????
                            ???????? ???????????? ???? ?????????? ???????? ?????????????? ????????????????.
                        </p>
                        <p>
                            <b>????????????: </b>
                            ?????????????? ???????? ?????? ???????????? ?????? ?????????? ???????????? ???????????????? ???????????????? ????????.
                        </p>
                    </div>
                    <div id="accordion" class='py-4'>

                        <div class="card">
                            <div class="card-header" id="singleHeadingAccordion1">
                                <h5 class="mb-0">
                                    <button data-btn='size-top-part' class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseSingleAccordion1" aria-expanded="false"
                                        aria-controls="collapseSingleAccordion2">
                                        ???????????? ?????????? ??????????
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSingleAccordion1" class="collapse show"
                                aria-labelledby="singleHeadingAccordion1" data-parent="#accordion">
                                <div class="card-body form-sizeing sizeing">
                                    <div class="box-table border mb-4">
                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????????? ????????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="neck-rotation" data-style='right: -8%;top: 14.5%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-1-neck-rotation.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size'
                                                    data-size-name="chest-rotation" data-style='top:29%;right: -22%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-1-chest-rotation.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size'
                                                    data-size-name="size-3-waist-rotation"
                                                    data-style='top:38.5%;right:-22%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-1-waist-rotation.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50   border-right p-3 tab-text">
                                                ?????????? ??????????
                                            </div>
                                            <div class=" p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size'
                                                    data-size-name="hip-rotation" data-style='top: 50%;right:-27%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-1-hip-rotation.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="size-top-part img position-relative"></div>
                                <!-- End Body -->
                            </div>
                        </div>
                        <!-- End Card 1-->


                        <div class="card">
                            <div class="card-header" id="singleHeadingAccordion3">
                                <h5 class="mb-0">
                                    <button data-btn="sleeve-measurements" class="btn btn-link collapsed"
                                        data-toggle="collapse" data-target="#collapseSingleAccordion3"
                                        aria-expanded="false" aria-controls="collapseSingleAccordion2">
                                        ???????????? ??????????????
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSingleAccordion3" class="collapse" aria-labelledby="singleHeadingAccordion3"
                                data-parent="#accordion">
                                <div class="card-body form-sizeing sizeing">
                                    <div class="box-table border mb-4">

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????????? ???????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="wrist-rotation" data-style='right: -24%;top: 17%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-2-wrist-rotation.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????????? ???????? ????????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="Shoulder-joint-rotation"
                                                    data-style='right:-34%;top:28%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-2-Shoulder-joint-rotation.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????????? ????????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="upper-arm-rotation" data-style='right:-36%;top:37%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-2-upper-arm-rotation.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50  border-right p-3 tab-text">
                                                ?????????? ???????? ????????
                                            </div>
                                            <div class=" p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="elbow-rotation" data-style='right:-36%;top:49%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-2-elbow-rotation.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>



                                    </div>
                                </div>
                                <div class="size-top-part img position-relative text-right"></div>
                            </div>
                        </div>
                        <!-- End Card 3-->

                        <div class="card">
                            <div class="card-header" id="singleHeadingAccordion4">
                                <h5 class="mb-0">
                                    <button data-btn='chest-measurements' class="btn btn-link collapsed"
                                        data-toggle="collapse" data-target="#collapseSingleAccordion4"
                                        aria-expanded="false" aria-controls="collapseSingleAccordion2">
                                        ???????????? ??????????
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSingleAccordion4" class="collapse" aria-labelledby="singleHeadingAccordion4"
                                data-parent="#accordion">
                                <div class="card-body form-sizeing sizeing">
                                    <div class="box-table border mb-4">

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="size-3-shoulder-width" data-style='right:-25%;top:17%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-4-shoulder-width.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="chest-width" data-style='right:-23%;top:23%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-4-chest-width.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ???????????? ?????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="size-3-chest-pocket" data-style='right:-14%;top: 21%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-4-chest-pocket.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50  border-right p-3 tab-text">
                                                ?????? ??????????????
                                            </div>
                                            <div class=" p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="size-3-gypsum-length" data-style='right:-8%;top: 26%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-4-gypsum-length.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>


                                    </div>
                                </div>
                                <div class="size-top-part img position-relative text-right"></div>
                            </div>
                        </div>
                        <!-- End Card 4-->

                        <div class="card">
                            <div class="card-header" id="singleHeadingAccordion8">
                                <h5 class="mb-0">
                                    <button data-btn='size-top-part' class="btn btn-link " data-toggle="collapse"
                                        data-target="#collapseSingleAccordion8" aria-expanded="false"
                                        aria-controls="collapseSingleAccordion2">
                                        ???????????? ??????????
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSingleAccordion8" class="collapse "
                                aria-labelledby="singleHeadingAccordion8" data-parent="#accordion">
                                <div class="card-body form-sizeing sizeing">
                                    <div class="box-table border mb-4">
                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????? ????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="Sleeve-Length" data-style='right:-34%;top: 32.5%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-5-Sleeve-Length.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size'
                                                    data-size-name="size-3-chest-length" data-style='top: 27%;right:-12%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-5-chest-length.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ???????????? ?????????? ??????????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size'
                                                    data-size-name="size-3-side-pocket-height"
                                                    data-style='top:33%;right:-20%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-5-side-pocket-height.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom   border-right p-3 tab-text">
                                                ?????????? ??????????
                                            </div>
                                            <div class=" border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size'
                                                    data-size-name="size-3-total-length" data-style='top: 50%;right:-11%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-5-total-length.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50   border-right p-3 tab-text">
                                                ?????? ???????? ??????????
                                            </div>
                                            <div class=" p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size'
                                                    data-size-name="Bottom-view"
                                                    data-style='top: auto;bottom: 9.5%;right:-37%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/size-5-Bottom-view.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>



                                    </div>
                                </div>

                                <div class="size-top-part img position-relative"></div>
                                <!-- End Body -->
                            </div>
                        </div>
                        <!-- End Card 8-->


                        <div class="card">
                            <div class="card-header" id="singleHeadingAccordion6">
                                <h5 class="mb-0">
                                    <button data-btn='back-size' class="btn btn-link" data-toggle="collapse"
                                        data-target="#collapseSingleAccordion6" aria-expanded="true"
                                        aria-controls="collapseSingleAccordion1">
                                        ???????????? ??????????
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseSingleAccordion6" class="collapse "
                                aria-labelledby="singleHeadingAccordion6" data-parent="#accordion">
                                <div class="card-body form-sizeing sizeing">

                                    <div class="box-table border mb-4">

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????? ??????????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="shoulder" data-style='right:-27%;top:18%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/backsize-shoulder.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="back-view" data-style='right:-25%;top:22.5%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/backsize-back-length.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>



                                        <div class="d-flex">
                                            <div class="w-50 border-bottom border-right p-3 tab-text">
                                                ?????? ??????????
                                            </div>
                                            <div class="border-bottom p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="size-3-back-length" data-style='right:-12%;top:21%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/backsize-back-view.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="w-50  border-right p-3 tab-text">
                                                ?????????? ??????????
                                            </div>
                                            <div class=" p-3 w-50">
                                                <input type="text" placeholder='Please Enter The Size' autofocus
                                                    data-size-name="size-33-total-length" data-style='right:-3%;top:21%'
                                                    data-img-url="{{ asset('assets/images/sizing/img-men-galabiya/backsize-total-length.png') }}">
                                            </div>
                                            <div class="check-done"></div>
                                        </div>

                                    </div>

                                </div>
                                <div class="size-top-part img position-relative text-right"></div>
                            </div>
                        </div>
                        <!-- Card 6 -->


                        <div class="card">
                            <div class="card-header" id="singleHeadingAccordion7">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseSingleAccordion7" aria-expanded="false"
                                        aria-controls="collapseSingleAccordion7">
                                        Additional Sizes
                                        <i class='fa fa-angle-down'></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSingleAccordion7" class="collapse "
                                aria-labelledby="singleHeadingAccordion7" data-parent="#accordion">
                                <div class="card-body form-sizeing p-0">
                                    <div class="box-table border mb-4">

                                        <div class="px-2 py-1">
                                            <input type="text" placeholder='size name' class='input-size'
                                                class='input-size'>
                                        </div>
                                        <div class="px-2 py-1">
                                            <input type="text" placeholder='How to use the size' class='input-size'
                                                class='input-size'>
                                        </div>

                                        <div class="px-2 py-1">
                                            <label for="" class='m-1'>Add Link</label>
                                            <input type="text" placeholder='Additional URL' class='input-size'
                                                class='input-size'>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- Card 7 -->



                        <div class="box-size">
                            <p>For matching sizes, choose your size</p>
                            <div class="inputs-size d-flex">

                                <input type="text" placeholder=' Height '
                                    style='width: 70px;height: 33px;border: 1px solid #000' class='mr-1'>

                                <div class="input-size">
                                    <input type="radio" name='size1' class='input-size'>
                                    <label for="">XXXL</label>
                                </div>
                                <div class="input-size">
                                    <input type="radio" name='size1' class='input-size' checked>
                                    <label for="">XXL</label>
                                </div>
                                <div class="input-size">
                                    <input type="radio" name='size1' class='input-size'>
                                    <label for="">XL</label>
                                </div>
                                <div class="input-size">
                                    <input type="radio" name='size1' class='input-size'>
                                    <label for="">L</label>
                                </div>
                                <div class="input-size">
                                    <input type="radio" name='size1' class='input-size'>
                                    <label for="">M</label>
                                </div>
                                <div class="input-size">
                                    <input type="radio" name='size1'>
                                    <label for="">S</label>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-5 right-images-sizes align-self-center">
                    <div class="size-top-part img pl-4 ml-4 ">
                        <img src="" class='img-fluid img-size img-first-size' alt="">
                        <div class="desc-manikin" data-shape-img='{{ asset('assets/images/sizing/bg_size_text.png') }}'>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row Accrodrion -->


            <div class="desc-size-details my-5">
                <div class="py-4 px-md-4 px-0 border-top border-bottom ">
                    <h4>Suggested designs</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quisquam iure magnam nobis, esse
                        doloremque id asperiores sapiente illo doloribus tempore incidunt odio obcaecati necessitatibus
                        ducimus rem, ea quos eligendi repudiandae? Soluta nam inventore nulla at quia. Consequatur,
                        voluptas. Nulla!
                    </p>


                    <div action="/file-upload" class="dropzone" id="myFileUploade">
                        <!-- <input type="file" name="file" /> -->
                    </div>

                </div>

                <div class="py-4 px-md-4 px-0 border-top border-bottom mb-3">
                    <h4>Customer Feedback</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quisquam iure magnam nobis, esse
                        doloremque id asperiores sapiente illo doloribus tempore incidunt odio obcaecati necessitatibus
                        ducimus rem, ea quos eligendi repudiandae? Soluta nam inventore nulla at quia. Consequatur,
                        voluptas. Nulla!
                    </p>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex fuga ea eos eius aliquid nihil cumque
                        excepturi soluta, deserunt temporibus quae laborum quibusdam voluptates velit, quod aspernatur ad
                        quasi perferendis?
                    </p>
                </div>
                <button class='btn btn-primary btn-sm'>Send Request</button>
            </div>

        </div>
    </div>
@endsection
