@extends('partials.layout')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">

            <div class="row">
                <div class="col-md-4">
                    <div class="box-sales text-dark d-block box-setting bg-white shadow border rounded p-4 ">
                        <h3 class="h1">$5000</h3>
                        <h4>اجمالي المبيعات</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-sales text-dark d-block box-setting bg-white shadow border rounded p-4 ">
                        <h3 class="h1"> 20 </h3>
                        <h4>اجمالي الزيارات</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-sales text-dark d-block box-setting bg-white shadow border rounded p-4 ">
                        <h3 class="h1"> 50 </h3>
                        <h4>اجمالي الشحن</h4>
                    </div>
                </div>
            </div>
            <div class="filter-search">
                <div class="heading d-flex justify-content-between align-items-center pe-3">
                    <h4 class="h5"> تصفية </h4>
                    <i class="uil uil-filter"></i>
                </div>
                <div class="content p-4 border">
                    <div class="row">


                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">تاريخ الإحصائيات </label></div>
                                <div class="col-8">
                                    <input type="date" class='form-control'>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">قنوات البيع</label></div>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">قنوات البيع</option>
                                        <option value="1">قنوات البيع</option>
                                        <option value="2">قنوات البيع</option>
                                        <option value="3">قنوات البيع</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">العملاء</label></div>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">العملاء</option>
                                        <option value="1">العملاء</option>
                                        <option value="2">العملاء</option>
                                        <option value="3">العملاء</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">الفروع</label></div>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">الفروع</option>
                                        <option value="1">الفروع</option>
                                        <option value="2">الفروع</option>
                                        <option value="3">الفروع</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">التصنيف </label></div>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">الدولة </option>
                                        <option value="1">الدولة </option>
                                        <option value="2">الدولة </option>
                                        <option value="3">الدولة </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">المدينة </label></div>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">المدينة </option>
                                        <option value="1">المدينة </option>
                                        <option value="2">المدينة </option>
                                        <option value="3">المدينة </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">نوع المبيعات </label></div>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">نوع المبيعات </option>
                                        <option value="1">نوع المبيعات </option>
                                        <option value="2">نوع المبيعات </option>
                                        <option value="3">نوع المبيعات </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">طرق الدفع </label></div>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">طرق الدفع </option>
                                        <option value="1">طرق الدفع </option>
                                        <option value="2">طرق الدفع </option>
                                        <option value="3">طرق الدفع </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-3"><label for="">فرز المنتجات </label></div>
                                <div class="col-8">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">فرز المنتجات </option>
                                        <option value="1">فرز المنتجات </option>
                                        <option value="2">فرز المنتجات </option>
                                        <option value="3">فرز المنتجات </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- /. end Filter -->


            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4"> إجمالي المبيعات </h6>
                    <div class="btns">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addCategory"
                            class="btn btn-dark"> إجمالي المبيعات </a>
                        <a href="javascript:void(0)" class="btn btn-outline-dark "> الأكثر مبيعا </a>
                        <a href="javascript:void(0)" class="btn btn-outline-dark"> الأقل مبيعا </a>
                    </div>
                </div>



                <div class="p-4">
                    <div class="btns-optons-table mb-3">
                        <button class="btn btn-dark">Print</button>
                        <button class="btn btn-dark">pdf</button>
                        <button class="btn btn-dark">Excel</button>
                        <button class="btn btn-dark">csv</button>
                        <button class="btn btn-dark">copy</button>
                    </div>
                    <div class="table-responsive   rounded-bottom mb-3">
                        <table class="table table-bordered table-center table-hover bg-white mb-0 table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center"> م </th>
                                    <th class="text-center"> رقم الطلب </th>
                                    <th class="text-center"> عدد المنتجات المبيعات </th>
                                    <th class="text-center">إجمالي قيمة المبيعات</th>
                                    <th class="text-center"> إجمالي الارباح </th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <span class="text-muted">1 </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">255 </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> 423895694 </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">$500.55</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">15</span>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <span class="text-muted">1</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">255</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">423895694</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">$500.55</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">15</span>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <span class="text-muted">1</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">255</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">423895694</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">$500.55</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">15</span>
                                    </td>
                                </tr>
                                <!-- End -->



                            </tbody>
                        </table>
                    </div>

                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><i
                                    class="uil uil-angle-right-b"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i
                                    class="uil uil-angle-left-b"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--end bg-white-->

        </div>
    </div>
    <!--end container-->
@endsection
