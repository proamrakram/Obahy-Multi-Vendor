@extends('partials.layout')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">

            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="bg-white p-3 border rounded-3">
                        <h2 class="h1">50</h2>
                        <h5>الطلبات الجديدة</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-3 border rounded-3">
                        <h2 class="h1">50</h2>
                        <h5>الطلبات المنفذة</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-3 border rounded-3">
                        <h2 class="h1">20</h2>
                        <h5>الطلبات المعلقة</h5>
                    </div>
                </div>
            </div>

            <div class="bg-white">
                <div class="filter-search">
                    <div class="heading d-flex justify-content-between align-items-center pe-3">
                        <h4 class="h5"> تصفية </h4>
                        <i class="uil uil-filter"></i>
                    </div>
                    <div class="content p-4 border">
                        <div class="row">


                            <div class="col-md-4 col-6">
                                <input type="date" class='form-control mb-3' placeholder='التاريخ'>
                            </div>

                            <div class="col-md-4 col-6">
                                <input type="text" class='form-control mb-3' placeholder='المتجر'>
                            </div>

                            <div class="col-md-4 col-6">
                                <input type="text" class='form-control mb-3' placeholder='الباقة'>
                            </div>

                            <div class="col-md-4 col-6">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected="">الدولة</option>
                                    <option value="1">الدولة</option>
                                    <option value="2">الدولة</option>
                                    <option value="3">الدولة</option>
                                </select>

                            </div>

                            <div class="col-md-4 col-6">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected="">المدينة</option>
                                    <option value="1">المدينة</option>
                                    <option value="2">المدينة</option>
                                    <option value="3">المدينة</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div> <!-- /. end Filter -->
            </div>



            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4"> الطلبات </h6>
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
                                    <th class="text-center">
                                        <div class="form-check">
                                            <input id="select-all" class="form-check-input" type="checkbox" value=""
                                                id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th class="text-center"> م </th>
                                    <th class="text-center"> العميل </th>
                                    <th class="text-center"> موقع العميل </th>
                                    <th class="text-center"> التاريخ والوقت </th>
                                    <th class="text-center"> شركة الشحن </th>
                                    <th class="text-center">الإجمالي </th>
                                    <th class="text-center"> اعدادات </th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <div class="form-check">
                                            <input class="form-check-input" data-check-all="yes" type="checkbox"
                                                value="" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td class="text-center p-2" width='50'>
                                        1
                                    </td>
                                    <td class="text-center p-2">
                                        Rwabett
                                    </td>
                                    <td class="text-center p-2">
                                        مصر
                                        <i class='ti ti-map-pin'></i>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">15/02/2019</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> DHL </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">$500.55</span>
                                    </td>
                                    <td class="text-end p-3">
                                        <div class="tools-options d-flex justify-content-center">
                                            <a href="#"> <i class="uil uil-trash-alt"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <div class="form-check">
                                            <input class="form-check-input" data-check-all="yes" type="checkbox"
                                                value="" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td class="text-center p-2" width='50'>
                                        1
                                    </td>
                                    <td class="text-center p-2">
                                        Rwabett
                                    </td>
                                    <td class="text-center p-2">
                                        مصر
                                        <i class='ti ti-map-pin'></i>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">15/02/2019</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> DHL </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">$500.55</span>
                                    </td>
                                    <td class="text-end p-3">
                                        <div class="tools-options d-flex justify-content-center">
                                            <a href="#"> <i class="uil uil-trash-alt"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End -->

                                <!-- Start -->
                                <tr>
                                    <td class="text-center p-2" width='50'>
                                        <div class="form-check">
                                            <input class="form-check-input" data-check-all="yes" type="checkbox"
                                                value="" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td class="text-center p-2" width='50'>
                                        1
                                    </td>
                                    <td class="text-center p-2">
                                        Rwabett
                                    </td>
                                    <td class="text-center p-2">
                                        مصر
                                        <i class='ti ti-map-pin'></i>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">15/02/2019</span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted"> DHL </span>
                                    </td>
                                    <td class="text-center p-2">
                                        <span class="text-muted">$500.55</span>
                                    </td>
                                    <td class="text-end p-3">
                                        <div class="tools-options d-flex justify-content-center">
                                            <a href="#"> <i class="uil uil-trash-alt"></i> </a>
                                        </div>
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


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>

    <script>
        var ctx = document.getElementById("memberNumber");

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                datasets: [{
                    label: '# of Member',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                    ],
                    borderColor: [
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(0, 0, 0)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
