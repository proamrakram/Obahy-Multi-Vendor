@extends('partials.layout')
@section('title')
    Obaya - Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="bg-white mt-3">
                <div class="d-flex justify-content-between p-4  bg-white   rounded-top border-bottom heading-with-shape">
                    <h6 class="fw-bold mb-0 h4"> إضافة مشترك </h6>
                </div>

                <div class="p-4">
                    <form action="{{ route('admin.stores.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Name" class="col-2 col-form-label">
                                        الاسم <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" value="{{ old('store_name_ar') }}"
                                                    name="store_name_ar"
                                                    class="form-control @error('store_name_ar') is-invalid @enderror"
                                                    id="NameAr" placeholder="الاسم بالعربية">

                                                @error('store_name_ar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-6">
                                                <input type="text" value="{{ old('store_name_en') }}"
                                                    name="store_name_en"
                                                    class="form-control col-6   @error('store_name_en') is-invalid @enderror"
                                                    id="NameEn" placeholder="الاسم بالانجليزية">
                                                @error('store_name_en')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Phone" class="col-2 col-form-label">
                                        رقم الهاتف <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('phone_number') }}" name="phone_number"
                                            class="form-control   @error('phone_number') is-invalid @enderror "
                                            id="Phone" placeholder="رقم الهاتف">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="admin" class="col-2 col-form-label">
                                        مدير المتجر <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <select name="store_admin" id=""
                                            class="form-select form-control  @error('store_admin') is-invalid @enderror">
                                            @foreach ($admins as $admin)
                                                <option value="{{ $admin->id }}"
                                                    @if (old('store_admin') == $admin->id) selected @endif>{{ $admin->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('store_admin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Country" class="col-2 col-form-label">
                                        الدولة <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <select name="store_country" id="country-dropdown"
                                            class="form-select form-control  @error('store_country') is-invalid @enderror">
                                            <option value="">اختر الدولة</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}"
                                                    @if (old('country_id') == $country->id) selected @endif>
                                                    {{ $country->country_name_ar }} </option>
                                            @endforeach
                                        </select>
                                        @error('store_country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="City" class="col-2 col-form-label">
                                        المدينة <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <select name="store_city" id="state-dropdown"
                                            class="form-select form-control  @error('store_city') is-invalid @enderror">

                                        </select>
                                        @error('store_city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Phone" class="col-2 col-form-label">
                                        تاريخ بداية الاشتراك <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="date" value="{{ old('subscription_start_date') }}"
                                            name="subscription_start_date"
                                            class="form-control   @error('subscription_start_date') is-invalid @enderror"
                                            id="Phone" placeholder="تاريخ بداية الاشتراك">
                                        @error('subscription_start_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="row">
                                    <label for="Date" class="col-2 col-form-label">
                                        اسم النطاق <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <input type="text" value="{{ old('store_domain') }}" name="store_domain"
                                            class="form-control   @error('store_domain') is-invalid @enderror"
                                            id="Date" placeholder="اكتب اسم النطاق">
                                        @error('store_domain')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="choose-package my-4 ">
                            <div class="row algin-items-center">
                                <div class="col-md-3">
                                    <h5>اختار الباقة</h5>
                                    <p class='text-muted'> (قم باختيار الاقة التي تناسبك) </p>
                                </div>
                                @foreach ($packages as $package)
                                    <div class="col-md-3">
                                        <div class="box-backage">
                                            <input type="radio" value="{{ $package->id }}"
                                                name='subscription_package_id'>
                                            <label for="">
                                                <h6>{{ $package->package_name_ar }}</h6>
                                                <p>
                                                    {{ $package->package_description_ar }}
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="City" class="col-2 col-form-label">
                                        طريقة الدفع <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-10">
                                        <select name="name" id=""
                                            class="form-select form-control   @error('name') is-invalid @enderror">
                                            <option value=""> اختر طريقة الدفع </option>
                                            <option value=""> اختر طريقة الدفع </option>
                                            <option value=""> اختر طريقة الدفع </option>
                                            <option value=""> اختر طريقة الدفع </option>
                                        </select>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row align-items-center">
                                    <label for="Name" class="col-2 col-form-label">
                                        الحالة <span class="text-danger"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <div class="form-check form-switch p-0 pt-1">
                                            <input name="store_status"
                                                class="form-check-input   @error('store_status') is-invalid @enderror"
                                                type="checkbox" id="flexSwitchCheckChecked" checked="">
                                            @error('store_status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr class="mt-5 mb-4">
                        <button class="btn btn-dark px-4 mx-4 py-2"> حفظ البيانات </button>

                    </form>
                </div>




            </div>
            <!--end bg-white-->
        </div>
    </div>
    <!--end container-->
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#country-dropdown').on('change', function() {
                var country_id = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{ url('/admin/get-cities-by-country') }}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#state-dropdown').html('<option value="">اختر المدينة</option>');
                        $.each(result.states, function(key, value) {
                            $("#state-dropdown").append('<option value="' + value.id +
                                '">' + value.city_name_ar + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
