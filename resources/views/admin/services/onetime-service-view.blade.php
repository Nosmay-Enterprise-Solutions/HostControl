@extends('layouts.admin')

@section('title', 'SAP Business One')

@section('domain', 'Onetime Services')

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
                <!-- Page title actions -->
                {{-- <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="#" class="btn">
                                New view
                            </a>
                        </span>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Create new report
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                            data-bs-target="#modal-report" aria-label="Create new report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </a>
                    </div>
                </div> --}}
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

                            <div class="card-body m-3 justify-content-end border rounded-3">
                                <div class="">
                                    <h3 class="card-title">Basic Information</h3>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Title</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp"
                                            placeholder="Enter Recurring Service Full Names">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Description <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="This description is what will show on invoices when they are being sent out. Keep it short and simple. If left blank your title will be the default assigned to description. ">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        <path d="M12 9h.01" />
                                        <path d="M11 12h1v4h1" />
                                    </svg></label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp"
                                            placeholder="Enter Recurring Service Description">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Status</label>
                                    <div class="col-auto align-self-center">
                                        <span class="col-auto">
                                            <label class="form-check form-check-single form-switch">
                                                <input class="form-check-input" type="checkbox" checked="">
                                                <span class="badge badge-outline text-green mx-2">Active</span>
                                                <span class="badge badge-outline text-danger mx-2">Inactive</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Price</label>
                                    <div class="col">
                                        <input type="number" class="form-control" aria-describedby="emailHelp"
                                            placeholder="GHC 0.00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Taxes included <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Toggle on if the service price given above is tax inclusive or not.">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        <path d="M12 9h.01" />
                                        <path d="M11 12h1v4h1" />
                                    </svg></label>
                                    <div class="col-auto align-self-center">
                                        <span class="col-auto">
                                            <label class="form-check form-check-single form-switch">
                                                <input class="form-check-input" type="checkbox" checked="">
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Taxes Name</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <optgroup label="Individual Taxes">
                                                <option>Covid-19 1.00%</option>
                                                <option>E-Levy 2.50%</option>
                                                <option>NHIL 2.5-%</option>
                                                <option>VAT 15.00%</option>
                                            </optgroup>
                                            <optgroup label="Tax Groups">
                                                <option>Levis + VAT</option>
                                                <option>CST + Levies + VAT</option>
                                            </optgroup>
                                        </select>
                                        <small class="form-hint">
                                            If a location-based tax is applied, it will take preference and be used by default in the customer's financial documents.
                                        </small>
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
                            </div>

                            <div class="card-body m-3 justify-content-end border rounded-3">
                                <div class="">
                                    <h3 class="card-title">Service Plan Availability</h3>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Show service on Customer portal</label>
                                    <div class="col-auto align-self-center">
                                        <span class="col-auto">
                                            <label class="form-check form-check-single form-switch">
                                                <input class="form-check-input" type="checkbox" checked="">
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Hide service on Admin portal <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="If a customer's location, category, and/or label is different from the service's values, the service will not be available to add as a service.">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 9h.01" />
                                            <path d="M11 12h1v4h1" />
                                        </svg></label>
                                    <div class="col-auto align-self-center">
                                        <span class="col-auto">
                                            <label class="form-check form-check-single form-switch">
                                                <input class="form-check-input" type="checkbox">
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Available Locations</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <option>All Selected</option>
                                            <option>Main</option>
                                            <option>Kumasi</option>
                                            <option>Lusaka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" row">
                                    <label class="col-3 col-form-label">Customer Category</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <option>All selected</option>
                                            <option>Individual</option>
                                            <option>Business</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon mb-2 text-danger icon-lg"><path d="M12 9v4"></path><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"></path><path d="M12 16h.01"></path></svg>
                <h3>Are you sure?</h3>
                <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be undone.</div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col">
            <a href="#" class="btn btn-3 w-100" data-bs-dismiss="modal">
            Cancel
            </a></div>
                        <div class="col">
            <a href="#" class="btn btn-danger btn-4 w-100" data-bs-dismiss="modal">
            Delete 84 items
            </a></div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
