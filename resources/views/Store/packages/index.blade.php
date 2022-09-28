@extends('partials.layout')
@section('title')
    Obaya - Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="layout-specing">

            <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> الباقات </h6>
            </div>

            <div class="img mt-3">
                <img src="{{ asset('assets/images/banner2.png') }}" width='100%'>
            </div>

            <div class="bg-white p-4 rounded-3 mt-3">
                <h5 class='mb-4'>باقات عبية</h5>
                <div class="row">

                    <div class="col-md-4">
                        <div class="box rounded bg-white p-4 border package-list mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class='main-color'>مجانية</h6>
                                <div class="price fs-13px">
                                    <span>99</span>
                                    <span class='text-muted'>ج.م</span>
                                    <span>/شهرياً</span>
                                </div>
                            </div>
                            <div class="list mt-3">
                                <ul>
                                    <li>تفعيل الدفع الالكترونى </li>
                                    <li> دعم اكثر من 23 شركة شحن عالمية و محلية </li>
                                    <li> ربط المتجر بدومين خاص </li>
                                    <li> عزز هوية متجرك من خلال ثيمات سلة و مميزات اكثر ... </li>
                                </ul>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addPackage"
                                    class='btn btn-dark rounded-0 py-2 px-3 mt-4'> <span>+ </span> اضف للمتجر </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box rounded bg-white p-4 border package-list mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class='main-color'>باقة متوسطة</h6>
                                <div class="price fs-13px">
                                    <span>99</span>
                                    <span class='text-muted'>ج.م</span>
                                    <span>/شهرياً</span>
                                </div>
                            </div>
                            <div class="list mt-3">
                                <ul>
                                    <li>تفعيل الدفع الالكترونى </li>
                                    <li> دعم اكثر من 23 شركة شحن عالمية و محلية </li>
                                    <li> ربط المتجر بدومين خاص </li>
                                    <li> عزز هوية متجرك من خلال ثيمات سلة و مميزات اكثر ... </li>
                                </ul>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addPackage"
                                    class='btn btn-dark rounded-0 py-2 px-3 mt-4'> <span>+ </span> اضف للمتجر </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box rounded bg-white p-4 border package-list mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class='main-color'> ماسية </h6>
                                <div class="price fs-13px">
                                    <span>99</span>
                                    <span class='text-muted'>ج.م</span>
                                    <span>/شهرياً</span>
                                </div>
                            </div>
                            <div class="list mt-3">
                                <ul>
                                    <li>تفعيل الدفع الالكترونى </li>
                                    <li> دعم اكثر من 23 شركة شحن عالمية و محلية </li>
                                    <li> ربط المتجر بدومين خاص </li>
                                    <li> عزز هوية متجرك من خلال ثيمات سلة و مميزات اكثر ... </li>
                                </ul>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addPackage"
                                    class='btn btn-dark rounded-0 py-2 px-3 mt-4'> <span>+ </span> اضف للمتجر </a>
                            </div>
                        </div>
                    </div>

                </div>

                <h5 class='mb-4 mt-5'> خدمات متقدمة </h5>

                <div class="row">
                    <div class="col-md-4">
                        <div class="box rounded bg-white p-4 border package-list mb-3 text-center">
                            <img src="assets/images/icon/www.svg" alt="">
                            <div class="">
                                <span>5000</span>
                                <span class="fs-13px text-muted"> نقطة </span>
                            </div>
                            <div class="price">
                                <span>571</span>
                                <span class="fs-12px text-muted"> ج.م </span>
                            </div>
                            <p>تواصل أسرع و وصول أسرع بتكاليف أقل</p>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addPackage"
                                class='btn btn-dark rounded-0 py-2 px-3 mt-3'> <span>+ </span> اضف للمتجر </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box rounded bg-white p-4 border package-list mb-3 text-center">
                            <img src="assets/images/icon/www.svg" alt="">
                            <div class="">
                                <span>5000</span>
                                <span class="fs-13px text-muted"> نقطة </span>
                            </div>
                            <div class="price">
                                <span>571</span>
                                <span class="fs-12px text-muted"> ج.م </span>
                            </div>
                            <p>تواصل أسرع و وصول أسرع بتكاليف أقل</p>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addPackage"
                                class='btn btn-dark rounded-0 py-2 px-3 mt-3'> <span>+ </span> اضف للمتجر </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box rounded bg-white p-4 border package-list mb-3 text-center">
                            <img src="assets/images/icon/www.svg" alt="">
                            <div class="">
                                <span>5000</span>
                                <span class="fs-13px text-muted"> نقطة </span>
                            </div>
                            <div class="price">
                                <span>571</span>
                                <span class="fs-12px text-muted"> ج.م </span>
                            </div>
                            <p>تواصل أسرع و وصول أسرع بتكاليف أقل</p>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addPackage"
                                class='btn btn-dark rounded-0 py-2 px-3 mt-3'> <span>+ </span> اضف للمتجر </a>
                        </div>
                    </div>
                </div>



                <!-- Modal Content Start -->
                <div class="modal fade" id="addPackage" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content rounded shadow border-0">
                            <div class="modal-header border-bottom bg-soft-dark">
                                <h5 class="modal-title" id="LoginForm-title">عبية برو</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="bg-white p-3 rounded box-shadow">
                                    <p class='text-muted fs-13px'>
                                        باقة صممت لتناسب تقدمك في التجارة الالكترونية حيث تمنحك مزايا إضافية مثل الربط مع
                                        الشركات شحن متعددة. و تفعيل
                                        وسائل الدفع الآجل
                                    </p>

                                    <h3 class='h5'>اختر العرض</h3>
                                    <div class="inputs mt-3">
                                        <label for="" class='d-flex align-items-center mb-1'>
                                            <input type="radio" name='name'>
                                            <span class='ps-2'>299</span>
                                            <span class='text-muted fs-13px'>ج.م</span>
                                            <span>/ شهرياً</span>
                                        </label>

                                        <label for="" class='d-flex align-items-center'>
                                            <input type="radio" name='name'>
                                            <span class='ps-2'>299</span>
                                            <span class='text-muted fs-13px'>ج.م</span>
                                            <span>/ سنويا</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-dark px-5">أضف لمتجرك</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Content End -->

            </div>
        </div>
    </div>


    <!--End page-content" -->
@endsection
