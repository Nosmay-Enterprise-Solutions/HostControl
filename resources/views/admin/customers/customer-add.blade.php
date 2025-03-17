@extends('layouts.admin')

@section('title', 'Add Customer')

@section('domain', 'Customers')

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        @yield('domain')
                    </div>
                    <h2 class="page-title">
                        @yield('title')
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">

            <div class="row row-card">

                <div class="col-12">
                    <form class="card" method="post" novalidate>@csrf
                        <div class="card-header">
                            <h3 class="card-title">Customer Basic Info</h3>
                        </div>
                        <div class="card-body  mx-4 justify-content-end">
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="portal-login">Portal Login</label>
                                <div class="col">
                                    <input type="email" class="form-control"
                                        placeholder="Enter portal login email/number" id="portal-login" name="portal_login" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="portal-password">Portal Password</label>
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Password" id="portal-password" name="portal_password" required>
                                    <small class="form-hint">
                                        Your password must be 8-20 characters long, contain letters and numbers, and
                                        must not contain
                                        spaces, special characters, or emoji.
                                    </small>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="confirm-password">Confirm Password</label>
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Confirm password" id="confirm-password" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="category">Category</label>
                                <div class="col">
                                    <select class="form-select" name="category" id="category" required>
                                        <option selected disabled>Select Category</option>
                                        <option value="individual">Individual</option>
                                        <option value="corporate">Corporate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="company-name">Companey Name</label>
                                <div class="col">
                                    <input type="text" class="form-control"
                                        placeholder="Enter companey names" name="company_name" id="company-name" required>
                                </div>
                            </div>
                            <div class="mb-3 row" style="display: none;">
                                <label class="col-3 col-form-label" for="surname">Surname</label>
                                <div class="col">
                                    <input type="text" class="form-control"
                                        placeholder="Enter Surname" name="surname" id="surname" required>
                                </div>
                            </div>
                            <div class="mb-3 row" style="display: none;">
                                <label class="col-3 col-form-label" for="other-names">Other Names</label>
                                <div class="col">
                                    <input type="text" class="form-control"
                                        placeholder="Enter Other Names" name="other_names" id="other-names" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="email">Email</label>
                                <div class="col">
                                    <input type="email" class="form-control"
                                        placeholder="Enter email" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="billing-email">Billing Email</label>
                                <div class="col">
                                    <input type="email" class="form-control"
                                        placeholder="Enter billing email" name="billing_email" id="billing-email" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="phone-number">Phone Number</label>
                                <div class="col">
                                    <input type="text" name="phonenumber" class="form-control" data-mask="+000(0)000000000" data-mask-visible="true" placeholder="+000(0)000000000" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="mb-3 row" style="display: none;">
                                <label class="col-3 col-form-label" for="date-of-birth">Date of Birth</label>
                                <div class="col">
                                    <input type="date" class="form-control" placeholder="DD/MM/YYY" name="date_of_birth" id="date-of-birth" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="registration-date">Registration Date</label>
                                <div class="col">
                                    <input type="date" class="form-control" placeholder="DD/MM/YYY" name="registration_date" id="registration-date" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="id-type">ID Type</label>
                                <div class="col">
                                    <select class="form-select" name="id_type" id="id-type">
                                        <option disabled selected>Select Type</option>
                                        @foreach ($id_types as $idtype)
                                        <option>{{$idtype['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="identification-id">Identification ID</label>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter personal Id number"
                                    name="identification_id" id="identification-id">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="partner">Partner</label>
                                <div class="col">
                                    <select class="form-select" name="partner" id="partner" required>
                                        <option selected disabled>Select Partner</option>
                                        <option value="null">Any</option>
                                        @foreach ($partners as $partner)
                                        <option value="{{$partner->id}}">{{$partner->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="location">Location</label>
                                <div class="col">
                                    <select class="form-select" name="location" id="location" required>
                                        <option selected disabled>Select Location</option>
                                        <option>Accra</option>
                                        <option>Kumasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="address">Address</label>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter Address"
                                    name="address" id="address" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-3 col-form-label" for="city">City</label>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter City"
                                    name="city" id="city" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#portal-login').focus();
            // Validate Password and Confirm Password
            $('#portal-password, #confirm-password').on('keyup', function () {
                var password = $('#portal-password').val();
                var confirmPassword = $('#confirm-password').val();
                if (password !== confirmPassword) {
                    $('#confirm-password').addClass('is-invalid');
                    // Disable submit button
                    $('button[type="submit"]').prop('disabled', true);
                } else {
                    $('#confirm-password').removeClass('is-invalid');
                    // Enable submit button
                    $('button[type="submit"]').prop('disabled', false);
                }
            });

            // If Category is Corporate, show Company Name else show Surname and Other Names
            $('#category').on('change', function () {
                var category = $(this).val();
                if (category === 'corporate') {
                    $('#company-name').parent().parent().show();
                    $('#registration-date').parent().parent().show();
                    $('#surname').parent().parent().hide();
                    $('#other-names').parent().parent().hide();
                    $('#date-of-birth').parent().parent().hide();
                } else if (category === 'individual') {
                    $('#company-name').parent().parent().hide();
                    $('#registration-date').parent().parent().hide();
                    $('#surname').parent().parent().show();
                    $('#other-names').parent().parent().show();
                    $('#date-of-birth').parent().parent().show();
                }
            });

            // Get location from partners
            $('#partner').on('change', function () {
                var partnerId = $(this).val();
                $.ajax({
                    url: '/customers/get-location/' + partnerId,
                    type: 'GET',
                    success: function (response) {
                        $('#location').val(response.location);
                        // Append response to location options
                        $('#location').empty().append('<option selected disabled>Select Location</option>');
                        if (response && response && Array.isArray(response)) {
                            $.each(response, function(index, location) {
                                if (location && location.id && location.name) {
                                    $('#location').append('<option value="' + location.id + '">' + location.name + '</option>');
                                }
                            });
                        } else {
                            console.error('Invalid locations data:', response ? response : 'No response received');
                            console.log(response)
                        }
                    }
                });
            });
        });

        // Validate inputs if fields that are not display none are filled
        $('form.card').on('submit', function (e) {
            var isValid = true;
            $(this).find('input:visible, select:visible').each(function () {
            if ($(this).prop('required') && !$(this).val()) {
                isValid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
            });

            if (!isValid) {
            e.preventDefault();
            alert('Please fill all required fields.');
            }
        });
    </script>

@endsection
