@extends('partials.layout')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">


            <div class="d-flex justify-content-between p-3 mb-3  bg-white   rounded-top border-bottom heading-with-shape">
                <h6 class="fw-bold mb-0 h4"> الطلبات </h6>
                <div class="btns">
                    <a href="A-new_create_order.php" class="btn btn-dark"> إنشاء طلب </a>
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
                    <a href="{{ route('store.orders.index') }}" class='active'> <span class=""> الطلبات </span> <span
                            class="text-muted"> ( 9
                            طلب ) </span> </a>
                    <a href="{{ route('store.orders-services.index') }}"> <span class=""> الخدمات </span> <span
                            class="text-muted"> ( 9 طلب )
                        </span> </a>
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
                                                    <img src="assets/images/img_user1.png" alt="">
                                                </div>
                                                <div class="order-box-content">
                                                    <p class='m-0'> <a href="ordres-deatails.php" class='text-dark'> عبد
                                                            الله حاسن الاحمدي </a> </p>
                                                    <div class="d">
                                                        <span class="text-muted font-sm "> <a href="ordres-deatails.php">
                                                                26324027# </a> </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="uil uil-map-marker mx-1"></i> المدينة المنورة </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="uil uil-desktop-alt mx-1"></i> مستعرض كمبيوتر </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="circle bg-green mx-1"></i>تم التوصيل </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2" width='120px'>
                                        <span class="text-dark"> 27,972 ر.س </span>
                                    </td>
                                    <td class="p-2" width='120px'>
                                        <span class="text-muted"> منذ أسبوع </span>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="  p-2">
                                        <div class="order-box">
                                            <div class="d-flex align-items-center">
                                                <div class="img-order-user me-3">
                                                    <img src="assets/images/img_user1.png" alt="">
                                                </div>
                                                <div class="order-box-content">
                                                    <p class='m-0'> <a href="ordres-deatails.php" class='text-dark'>
                                                            عبد الله حاسن الاحمدي </a> </p>
                                                    <div class="d">
                                                        <span class="text-muted font-sm "> <a href="ordres-deatails.php">
                                                                26324027# </a> </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="uil uil-map-marker mx-1"></i> المدينة المنورة
                                                        </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="uil uil-desktop-alt mx-1"></i> مستعرض كمبيوتر
                                                        </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="circle bg-green mx-1"></i>تم التوصيل </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2" width='120px'>
                                        <span class="text-dark"> 27,972 ر.س </span>
                                    </td>
                                    <td class="p-2" width='120px'>
                                        <span class="text-muted"> منذ أسبوع </span>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="  p-2">
                                        <div class="order-box">
                                            <div class="d-flex align-items-center">
                                                <div class="img-order-user me-3">
                                                    <img src="assets/images/img_user1.png" alt="">
                                                </div>
                                                <div class="order-box-content">
                                                    <p class='m-0'> <a href="ordres-deatails.php" class='text-dark'>
                                                            عبد الله حاسن الاحمدي </a> </p>
                                                    <div class="d">
                                                        <span class="text-muted font-sm "> <a href="ordres-deatails.php">
                                                                26324027# </a> </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="uil uil-map-marker mx-1"></i> المدينة المنورة
                                                        </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="uil uil-desktop-alt mx-1"></i> مستعرض كمبيوتر
                                                        </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="circle bg-green mx-1"></i>تم التوصيل </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2" width='120px'>
                                        <span class="text-dark"> 27,972 ر.س </span>
                                    </td>
                                    <td class="p-2" width='120px'>
                                        <span class="text-muted"> منذ أسبوع </span>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="  p-2">
                                        <div class="order-box">
                                            <div class="d-flex align-items-center">
                                                <div class="img-order-user me-3">
                                                    <img src="assets/images/img_user1.png" alt="">
                                                </div>
                                                <div class="order-box-content">
                                                    <p class='m-0'> <a href="" class='text-dark'> عبد الله حاسن
                                                            الاحمدي </a> </p>
                                                    <div class="d">
                                                        <span class="text-muted font-sm "> <a href="ordres-deatails.php">
                                                                26324027# </a> </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="uil uil-map-marker mx-1"></i> المدينة المنورة
                                                        </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="uil uil-desktop-alt mx-1"></i> مستعرض كمبيوتر
                                                        </span>
                                                        <span class="text-muted font-sm "> <i
                                                                class="circle bg-green mx-1"></i>تم التوصيل </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2" width='120px'>
                                        <span class="text-dark"> 27,972 ر.س </span>
                                    </td>
                                    <td class="p-2" width='120px'>
                                        <span class="text-muted"> منذ أسبوع </span>
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
