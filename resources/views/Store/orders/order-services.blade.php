@extends('partials.layout')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">


            <div class="d-flex justify-content-between p-3 mb-3  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> الطلبات </h6>
                <div class="btns">
                    <a href="javascript:void(0)" class="btn btn-dark"> طلب جديد </a>
                </div>
            </div>

            <div class="statistic">
                <div class="row">

                    <div class="col-md-2 col-4">
                        <div class="box-statistic bg-white p-3 border">
                            <div class="icon mb-3">
                                <img src="assets/images/icon/icon-watch.svg" alt="">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="circle bg-red me-1"></span>
                                    <span class="txt text-muted"> بإنتظار الدفع </span>
                                </div>
                                <h4 class='mb-0 text-muted'>0</h4>
                            </div>
                        </div>
                    </div> <!-- End Col -->

                    <div class="col-md-2 col-4">
                        <div class="box-statistic bg-white p-3 border">
                            <div class="icon mb-3">
                                <img src="assets/images/icon/icon-gift.svg" alt="">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="circle bg-blue me-1"></span>
                                    <span class="txt text-muted"> قيد التنفيذ </span>
                                </div>
                                <h4 class='mb-0 text-muted'> 229 </h4>
                            </div>
                        </div>
                    </div> <!-- End Col -->

                    <div class="col-md-2 col-4">
                        <div class="box-statistic bg-white p-3 border">
                            <div class="icon mb-3">
                                <img src="assets/images/icon/icon-check.svg" alt="">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="circle bg-green me-1"></span>
                                    <span class="txt text-muted"> تم التنفيذ </span>
                                </div>
                                <h4 class='mb-0 text-muted'> 557 </h4>
                            </div>
                        </div>
                    </div> <!-- End Col -->

                    <div class="col-md-2 col-4">
                        <div class="box-statistic bg-white p-3 border">
                            <div class="icon mb-3">
                                <img src="assets/images/icon/icon-truck.svg" alt="">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="circle bg-green me-1"></span>
                                    <span class="txt text-muted"> جارى التوصيل </span>
                                </div>
                                <h4 class='mb-0 text-muted'> 557 </h4>
                            </div>
                        </div>
                    </div> <!-- End Col -->

                    <div class="col-md-2 col-4">
                        <div class="box-statistic bg-white p-3 border">
                            <div class="icon mb-3">
                                <img src="assets/images/icon/icon-clock-regular.svg" alt="">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="circle bg-green me-1"></span>
                                    <span class="txt text-muted"> تم التوصيل </span>
                                </div>
                                <h4 class='mb-0 text-muted'> 557 </h4>
                            </div>
                        </div>
                    </div> <!-- End Col -->

                    <div class="col-md-2 col-4">
                        <div class="box-statistic bg-white p-3 border">
                            <div class="icon mb-3">
                                <img src="assets/images/icon/icon-trash.svg" alt="">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="circle bg-dark me-1"></span>
                                    <span class="txt text-muted"> اجمالي الخدمات </span>
                                </div>
                                <h4 class='mb-0 text-muted'> 557 </h4>
                            </div>
                        </div>
                    </div> <!-- End Col -->


                </div>
            </div>


            <div class="bg-white mt-3">
                <div class="heading-links">
                    <a href="{{ route('store.orders.index') }}"> <span class=""> الطلبات </span> <span
                            class="text-muted"> ( 9 طلب ) </span>
                    </a>
                    <a href="{{ route('store.orders-services.index') }}" class='active'> <span class=""> الخدمات
                        </span> <span class="text-muted"> ( 9 طلب ) </span> </a>
                </div>
                <div class="p-4">
                    <div class="table-responsive   rounded-bottom mb-3">
                        <table class="table border-top table-center table-hover bg-white mb-0">
                            <tbody>
                                <!-- Start -->
                                <tr>
                                    <td class="  p-2">
                                        <div class="order-box">
                                            <div class="d-flex align-items-center">
                                                <div class="img-order-user me-3">
                                                    <img src="assets/images/img-service.png" alt="">
                                                </div>
                                                <div class="order-box-content">
                                                    <p class='m-0'> <a href="" class='text-dark'> ملابس قصيرة </a>
                                                    </p>
                                                    <div class="d">
                                                        <span class="text-muted font-sm "> تفاصيل عن الخدمة </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2">
                                        <span class="text-dark d-block"> خبير المظهر </span>
                                        <span class='font-sm text-muted'> اسم خبير المظهر </span>
                                    </td>

                                    <td class="p-2">
                                        <span class="text-dark d-block"> الحالة </span>
                                        <span class='font-sm text-blue'> قيد التنفيذ </span>
                                    </td>

                                    <td class="p-2">
                                        <span class="text-dark d-block">العنوان</span>
                                        <span class='font-sm text-muted'> بلس/ لوحة مفاتيح باللغة الإنجليزية 2020 </span>
                                    </td>

                                    <td class="p-2">
                                        <div class="tools-options d-flex justify-content-end">
                                            <div class="form-check form-switch p-0 pt-1">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked="">
                                            </div>
                                            <a href="#"> <i class="uil uil-edit"></i> </a>
                                            <a href="#"> <i class="uil uil-trash-alt"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="  p-2">
                                        <div class="order-box">
                                            <div class="d-flex align-items-center">
                                                <div class="img-order-user me-3">
                                                    <img src="assets/images/img-service.png" alt="">
                                                </div>
                                                <div class="order-box-content">
                                                    <p class='m-0'> <a href="" class='text-dark'> ملابس قصيرة
                                                        </a> </p>
                                                    <div class="d">
                                                        <span class="text-muted font-sm "> تفاصيل عن الخدمة </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2">
                                        <span class="text-dark d-block"> خبير المظهر </span>
                                        <span class='font-sm text-muted'> اسم خبير المظهر </span>
                                    </td>

                                    <td class="p-2">
                                        <span class="text-dark d-block"> الحالة </span>
                                        <span class='font-sm text-blue'> قيد التنفيذ </span>
                                    </td>

                                    <td class="p-2">
                                        <span class="text-dark d-block">العنوان</span>
                                        <span class='font-sm text-muted'> بلس/ لوحة مفاتيح باللغة الإنجليزية 2020 </span>
                                    </td>

                                    <td class="p-2">
                                        <div class="tools-options d-flex justify-content-end">
                                            <div class="form-check form-switch p-0 pt-1">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked="">
                                            </div>
                                            <a href="#"> <i class="uil uil-edit"></i> </a>
                                            <a href="#"> <i class="uil uil-trash-alt"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="  p-2">
                                        <div class="order-box">
                                            <div class="d-flex align-items-center">
                                                <div class="img-order-user me-3">
                                                    <img src="assets/images/img-service.png" alt="">
                                                </div>
                                                <div class="order-box-content">
                                                    <p class='m-0'> <a href="" class='text-dark'> ملابس قصيرة
                                                        </a> </p>
                                                    <div class="d">
                                                        <span class="text-muted font-sm "> تفاصيل عن الخدمة </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2">
                                        <span class="text-dark d-block"> خبير المظهر </span>
                                        <span class='font-sm text-muted'> اسم خبير المظهر </span>
                                    </td>

                                    <td class="p-2">
                                        <span class="text-dark d-block"> الحالة </span>
                                        <span class='font-sm text-blue'> قيد التنفيذ </span>
                                    </td>

                                    <td class="p-2">
                                        <span class="text-dark d-block">العنوان</span>
                                        <span class='font-sm text-muted'> بلس/ لوحة مفاتيح باللغة الإنجليزية 2020 </span>
                                    </td>

                                    <td class="p-2">
                                        <div class="tools-options d-flex justify-content-end">
                                            <div class="form-check form-switch p-0 pt-1">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked="">
                                            </div>
                                            <a href="#"> <i class="uil uil-edit"></i> </a>
                                            <a href="#"> <i class="uil uil-trash-alt"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End -->



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end bg-white-->

        </div>
    </div>
    <!--end container-->
@endsection
