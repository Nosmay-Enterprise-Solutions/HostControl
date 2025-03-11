@extends('layouts.admin')

@section('title', 'Add Lead')

@section('domain', 'Leads')

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
                    <div class="col-md-10">
                        <form class="card">
                            <div class="card-header">
                                <h3 class="card-title">Lead Basic Info</h3>
                            </div>
                            <div class="card-body  mx-4 justify-content-end">
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Full Name</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Lead Full Names">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Pipeline Status</label>
                                    <div class="col">
                                        <select class="form-select">
                                          <option>New Enquiry</option>
                                          <option>Qualification</option>
                                          <option>Remmitance</option>
                                          <option>Activation</option>
                                          <option>Won</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Owner</label>
                                    <div class="col">
                                        <select class="form-select">
                                          <option>Me</option>
                                          <option>Unassigned</option>
                                          <option>Michael Agadzi</option>
                                          <option>Brian Bayireba</option>
                                          <option>Emelia Yamson</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Phone Number</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Eg: 23355*****10">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">POC Number</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Point of Contact Number">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Email</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Billing Email</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter billing email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Partner</label>
                                    <div class="col">
                                        <select class="form-select">
                                          <option>Nosmay Ghana</option>
                                          <option>Nosmay Zambia</option>
                                          <option>DEMO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Identification ID</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter personal Id number">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Location</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <option>Accra</option>
                                          <option>Kumasi</option>
                                          <option>Main</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Street</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter street">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">City</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter city">
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
    </div>

@endsection
