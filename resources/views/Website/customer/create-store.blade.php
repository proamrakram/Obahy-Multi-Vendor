@extends('Website.partials.layout-2')

@section('content')
    <div class="page page-create-store mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/img_create_store.png') }}" class='img-fluid m-auto d-block'
                        alt="">
                </div>
                <div class="col-md-6">
                    <div class="text d-flex justify-content-center flex-column h-100">
                        <div class="box">
                            <h1> Create your store </h1>
                            <p> ✨Welcome to the world of e-commerce✨ </p>
                            {{-- <div class="start-now-form position-relative mt-5 w-75">
                                <form action="" method="">
                                    <input type="text" placeholder="Your Email" class='form-control rounded-pill'
                                        required>
                                    <button class='btn btn-sm btn-primary rounded-pill position-absolute'> Start Now
                                    </button>
                                </form>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-create-new-store mt-0 mt-md-5 pt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="form p-4 border rounded bg-gray">
                            <div class="heading text-center">
                                <h2 class='h3'>Create your store with Obaya platform</h2>
                                <p>Welcome to the world of e-commerce</p>
                            </div>
                            <form id="store_subscription" action="#" method="POST">
                                @csrf
                                <div class="input-group mt-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-none" id="basic_store_title">
                                            <img src="{{ asset('assets/images/icon/icon-store.svg') }}" width="24px"
                                                alt="">
                                        </span>
                                    </div>
                                    <input type="text" id="store_title" name="store_title" class="form-control"
                                        placeholder="Store Title">
                                </div>

                                <small id="message_store_title" class="text-danger invisible"></small>

                                <div class=" mt-2">
                                    <div class="input-group position-relative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-none" id="basic_store_slug">
                                                <i class="fas fa-link"></i>
                                            </span>
                                        </div>

                                        <div class="text-explain position-absolute ">
                                            Obyah.com/
                                        </div>

                                        <input type="text" id="store_slug" name="store_slug" class="form-control text-"
                                            placeholder="Store URL">

                                    </div>

                                    <small id="basic_store_slug" class="text-danger invisible"></small>

                                </div>


                                <div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-none" id="basic_entity_type">
                                            <i class="far fa-building"></i>
                                        </span>
                                    </div>
                                    <select name="entity_type" class="form-control" id="entity_type">
                                        <option value="fabrics">Fabrics</option>
                                        <option value="clothes">Clothes</option>
                                    </select>
                                </div>

                                <small id="message_entity_type" class="text-danger invisible"></small>

                                <div class="input-group mt-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-none" id="basic_commercial_registration_link">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="commercial_registration_link"
                                        name="commercial_registration_link" class="form-control"
                                        placeholder="Commercial Registration Link">
                                </div>

                                <small id="message_commercial_registration_link" class="text-danger invisible"></small>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-none"
                                                    id="basic_the_registration_number_in_trusted">
                                                    <img src="{{ asset('assets/images/icon/icon-number.svg') }}"
                                                        width="24px" alt="">
                                                </span>
                                            </div>
                                            <input type="text" id="the_registration_number_in_trusted"
                                                name="the_registration_number_in_trusted" class="form-control"
                                                placeholder="The registration number in trusted">
                                        </div>

                                        <small id="message_the_registration_number_in_trusted"
                                            class="text-danger invisible"></small>

                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-none" id="basic_id_number">
                                                    <img src="{{ asset('assets/images/icon/icon-number.svg') }}"
                                                        width="24px" alt="">
                                                </span>
                                            </div>
                                            <input type="text" id="id_number" name="id_number" class="form-control"
                                                placeholder="ID Number">
                                        </div>

                                        <small id="message_id_number" class="text-danger invisible"></small>

                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-none" id="basic_store_manager">
                                                    <i class='far fa-user-circle'></i>
                                                </span>
                                            </div>
                                            <input type="text" id="store_manager" name="store_manager"
                                                class="form-control" placeholder="Store Manager">
                                        </div>

                                        <small id="message_store_manager" class="text-danger invisible"></small>

                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-none" id="basic_phone_number">
                                                    <img src="{{ asset('assets/images/icon/icon-telephone.svg') }}"
                                                        width="18" alt="">
                                                </span>
                                            </div>
                                            <input type="text" id="phone_number" name="phone_number"
                                                class="form-control" placeholder="Phone Number">
                                        </div>

                                        <small id="message_phone_number" class="text-danger invisible"></small>

                                    </div>

                                    <div class="col-12">

                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-none" id="basic_email">
                                                    <i class='far fa-envelope-open'></i>
                                                </span>
                                            </div>
                                            <input type="email" id="email" name="email" class="form-control"
                                                value="{{ $email ?? '' }}" placeholder="Email">
                                        </div>

                                        <small id="message_email" class="text-danger invisible"></small>

                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-none" id="basic_password">
                                                    <img src="{{ asset('assets/images/icon/icon-lock.svg') }}"
                                                        width="16" alt="">
                                                </span>
                                            </div>
                                            <input type="text" id="password" name="password" class="form-control"
                                                placeholder="Password">
                                        </div>

                                        <small id="message_password" class="text-danger invisible"></small>

                                    </div>

                                    <div class="col-6 mb-2">
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-none" id="basic_confirm_password">
                                                    <img src="{{ asset('assets/images/icon/icon-lock.svg') }}"
                                                        width="16" alt="">
                                                </span>
                                            </div>
                                            <input type="text" id="confirm_password" name="confirm_password"
                                                class="form-control" placeholder="Confirm Password">
                                        </div>

                                        <small id="message_confirm_password" class="text-danger invisible"></small>

                                    </div>
                                </div>

                                <button id="submit" class='btn btn-primary btn-block'> Register Store </button>
                            </form>
                            <a href="#" class='d-block mt-4 font-weight-bold text-center text-dark'> Login Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            //Messages

            $('#message_store_title').removeClass("invisible");
            // $('#message_store_title').addClass("visible");

            $('#basic_store_slug').removeClass("invisible");
            // $('#basic_store_slug').addClass("visible")

            $('#message_entity_type').removeClass("invisible");
            // $('#message_entity_type').addClass("visible");

            $('#message_commercial_registration_link').removeClass("invisible");
            // $('#message_commercial_registration_link').addClass("visible");

            $('#message_the_registration_number_in_trusted').removeClass("invisible");
            // $('#message_the_registration_number_in_trusted').addClass("visible");

            $('#message_id_number').removeClass("invisible");
            // $('#message_id_number').addClass("visible");

            $('#message_store_manager').removeClass("invisible");
            // $('#message_store_manager').addClass("visible");

            $('#message_phone_number').removeClass("invisible");
            // $('#message_phone_number').addClass("visible");

            $('#message_email').removeClass("invisible");
            // $('#message_email').addClass("visible");

            $('#message_password').removeClass("invisible");
            // $('#message_password').addClass("visible");

            $('#message_confirm_password').removeClass("invisible");
            // $('#message_confirm_password').addClass("visible");


            //Fields
            var store_title = $('#store_title');
            var store_slug = $('#store_slug');
            var entity_type = $('#entity_type');
            var commercial_registration_link = $('#commercial_registration_link');
            var the_registration_number_in_trusted = $('#the_registration_number_in_trusted');
            var id_number = $('#id_number');
            var store_manager = $('#store_manager');
            var phone_number = $('#phone_number');
            var email = $('#email');
            var password = $('#password');
            var confirm_password = $('#confirm_password');


            // store_title.css("border-color", "red");
            // store_slug.css("border-color", "red");
            // entity_type.css("border-color", "red");
            // commercial_registration_link.css("border-color", "red");
            // the_registration_number_in_trusted.css("border-color", "red");
            // id_number.css("border-color", "red");
            // store_manager.css("border-color", "red");
            // phone_number.css("border-color", "red");
            // email.css("border-color", "red");
            // password.css("border-color", "red");
            // confirm_password.css("border-color", "red");

            //Span Images
            // $('#basic_store_title').css('border-color', 'red');
            // $('#basic_store_slug').css('border-color', 'red');
            // $('#basic_entity_type').css('border-color', 'red');
            // $('#basic_commercial_registration_link').css('border-color', 'red');
            // $('#basic_the_registration_number_in_trusted').css('border-color', 'red');
            // $('#basic_id_number').css('border-color', 'red');
            // $('#basic_store_manager').css('border-color', 'red');
            // $('#basic_phone_number').css('border-color', 'red');
            // $('#basic_email').css('border-color', 'red');
            // $('#basic_password').css('border-color', 'red');
            // $('#basic_confirm_password').css("border-color", "red");




            $("#store_subscription").submit(function(e) {

                e.preventDefault();

                $.ajax({
                    url: "{{ route('create-store') }}",
                    method: 'POST',
                    data: {
                        store_title: store_title.val(),
                        store_slug: store_slug.val(),
                        entity_type: entity_type.val(),
                        commercial_registration_link: commercial_registration_link.val(),
                        registration_number_in_trusted: the_registration_number_in_trusted.val(),
                        id_number: id_number.val(),
                        store_manager: store_manager.val(),
                        phone_number: phone_number.val(),
                        email: email.val(),
                        password: password.val(),
                        password_confirmation: confirm_password.val(),
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        lang: "{{ app()->getLocale() }}"
                    },

                    success: function(data) {
                        location.reload(true);
                    },

                    error: function(reject) {

                        var response = $.parseJSON(reject.responseText);

                        console.log(response.errors);

                        // if (response.errors.name) {
                        //     admin_name.css("border-color", "red");
                        //     admin_name_message.show();
                        //     admin_name_message.text(response.errors.name[0]);
                        // } else {
                        //     admin_name.css("border-color", "green");
                        //     admin_name_message.hide();
                        //     admin_name_message.text("Success");
                        // }

                        // $.each(response.errors, function(key, val) {

                        //     if (key == "name") {
                        //         $("#name_error_register_message").show();
                        //         $('#name_error_register_message').text(val[0]);
                        //     }

                        //     if (key == "email") {
                        //         $("#email_error_register_message").show();
                        //         $('#email_error_register_message').text(val[0]);
                        //     }

                        //     if (key == "password") {
                        //         $("#password_error_register_message").show();
                        //         $('#password_error_register_message').text(val[0]);
                        //     }

                        //     if (key == "phone") {
                        //         $("#phone_error_register_message").show();
                        //         $('#phone_error_register_message').text(val[0]);
                        //     }

                        //     if (key == "country_id") {
                        //         $("#country_id_error_register_message").show();
                        //         $('#country_id_error_register_message').text(val[0]);
                        //     }


                        //     if (key == "city_id") {
                        //         $("#city_id_error_register_message").show();
                        //         $('#city_id_error_register_message').text(val[0]);
                        //     }

                        //     if (key == "gender") {
                        //         $("#gender_error_register_message").show();
                        //         $('#gender_error_register_message').text(val[0]);
                        //     }

                        // });
                    }
                });
            });
        });
    </script>
@endsection
