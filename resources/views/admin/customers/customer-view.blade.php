@extends('layouts.admin')

@section('title', !is_null($customer->companyname) ? $customer->companyname : $customer->firstname.' '.$customer->surname)

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
                        {{-- @yield('title') --}}
                        {{ $customer->companyname }} <span class="mx-1"> (#{{ $customer->code }}) </span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-info" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                                role="tab">Information</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#tabs-services" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">Services</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#tabs-billing" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">Billing</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-doc" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                                tabindex="-1">Documents</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-lead" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                                tabindex="-1">Lead</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <!-- Customer's Info -->
                        <div class="tab-pane active show" id="tabs-info" role="tabpanel">
                            <div class="row justify-content-center p-2">
                                <div class="card">
                                    <div class="row m-3 align-items-center">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="row justify-content-center">
                                                <div class="col-auto  align-self-center">
                                                    <a href="#" class="avatar avatar-upload rounded">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path
                                                                d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                                        </svg>
                                                        <span class="avatar-upload-text"></span>
                                                    </a>

                                                </div>
                                                <div class="col-auto">
                                                    <div class="align-self-center">
                                                        <div class="form-label">Owner</div>
                                                        <select class="form-select">
                                                            <option value="1">Me</option>
                                                            <option value="2">Michael Asary</option>
                                                            <option value="3">Sales Department</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-8">
                                            {{-- Old Buttons --}}
                                            <div class="row justify-content-end">
                                                <div class="col-auto text-center my-2">


                                                    {{-- Status Button --}}
                                                    <div class="btn-group m-1" role="group">
                                                        <input type="radio" class="btn-check" name="btn-radio-dropdown"
                                                            id="btn-radio-status-dropdown" autocomplete="off">
                                                        <label for="btn-radio-status-dropdown" class="btn dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Status
                                                        </label>
                                                        <div class="dropdown-menu text-center p-2">
                                                            <button class="badge bg-warning d-block p-2 mb-1"
                                                                href="http://127.0.0.1:8001/Customer/view">New
                                                                Enquiry</button>
                                                            <button class="badge bg-indigo d-block p-2 mb-1"
                                                                href="http://127.0.0.1:8001/Customer/view">Qualification</button>
                                                            <button class="badge bg-warning d-block p-2 mb-1"
                                                                href="http://127.0.0.1:8001/Customer/view">Remittance</button>
                                                            <button class="badge bg-success d-block p-2 mb-1"
                                                                href="http://127.0.0.1:8001/Customer/view">Activation</button>
                                                            <button class="badge bg-success d-block p-2 mb-1"
                                                                href="http://127.0.0.1:8001/Customer/view">Won</button>
                                                        </div>
                                                    </div>

                                                    {{-- Actions Button --}}
                                                    <div class="btn-group m-1" role="group">
                                                        <input type="radio" class="btn-check" name="btn-radio-dropdown"
                                                            id="btn-radio-actions-dropdown" autocomplete="off">
                                                        <label for="btn-radio-actions-dropdown"
                                                            class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Actions
                                                        </label>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">
                                                                Send Message
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                Delete Customer
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- Actions Button --}}
                                                    <div class="btn-group m-1" role="group">
                                                        <input type="radio" class="btn-check" name="btn-radio-dropdown"
                                                            id="btn-radio-actions-dropdown" autocomplete="off">
                                                        <label for="btn-radio-actions-dropdown"
                                                            class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Tickets
                                                        </label>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">
                                                                Create Ticket
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                All Tickets
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- Actions Button --}}
                                                    <div class="btn-group" role="group">
                                                        <span class="m-1">
                                                            <button href="./" class="btn btn-primary"
                                                                data-bs-boundary="viewport"
                                                                data-bs-toggle="">Convert</button>
                                                        </span>

                                                        <span class="m-1">
                                                            <button href="./" class="btn btn-primary"
                                                                data-bs-boundary="viewport"
                                                                data-bs-toggle="">Save</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                    <div class="card">
                                        <form>
                                            <div class="card-body  mx-4 justify-content-end">

                                                <h3 class="card-title">Basic Information</h3>
                                                @if ($customer->type == 'individual')
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label required">Surname</label>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            value="{{$customer->surname}}"
                                                            placeholder="Enter Customer's Surames">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label required">Other Names</label>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            value="{{$customer->firstname}}"
                                                            placeholder="Enter Customer's Other Names">
                                                    </div>
                                                </div>
                                                @elseif($customer->type == 'corporate')
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label required">Company Name</label>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            value="{{$customer->companyname}}"
                                                            placeholder="Enter Company's Name">
                                                    </div>
                                                </div>
                                                @endif
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
                                                    <label class="col-3 col-form-label required">Phone
                                                        Number</label>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            value="{{$customer->contact}}" placeholder="Eg: 23355*****10">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label">POC Number</label>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Point of Contact Number">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label required">Email</label>
                                                    <div class="col">
                                                        <input type="email" class="form-control"
                                                        value="{{$customer->email}}" placeholder="Enter email">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label">Billing
                                                        Email</label>
                                                    <div class="col">
                                                        <input type="email" class="form-control"
                                                            value="{{$customer->billing_email}}"
                                                            placeholder="Enter billing email">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label">Partner</label>
                                                    <div class="col">
                                                        <select class="form-select">
                                                            <option value="null" selected>Any</option>
                                                            @foreach ($partners as $partner)
                                                            <option value="{{$partner->id}}" @if($customer->partner_id == $partner->id) selected @endif>{{$partner->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label">Identification ID</label>
                                                    <div class="col">
                                                        <input type="email" class="form-control"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter personal Id number">
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
                                                    <label class="col-3 col-form-label">Address</label>
                                                    <div class="col">
                                                        <input type="email" class="form-control"
                                                            aria-describedby="emailHelp" placeholder="Enter street">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-3 col-form-label">City</label>
                                                    <div class="col">
                                                        <input type="email" class="form-control"
                                                            aria-describedby="emailHelp" placeholder="Enter city">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="card mb-3">

                                        <div class="card-body  mx-4 justify-content-end">
                                            <h3 class="card-title">Communication</h3>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body  mx-4 justify-content-end">
                                            <h3 class="card-title">To-dos</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Customer's Services -->
                        <div class="tab-pane" id="tabs-services" role="tabpanel">

                            <div class="row row-card">

                                <div class="col-12">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header justify-content-end">
                                                {{-- <div class="btn-group d-inline-block" role="group">
                                                    <input type="radio" class="btn-check"
                                                        name="btn-radio-vertical-dropdown"
                                                        id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                                    <label for="btn-radio-vertical-dropdown-dropdown"
                                                        class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Bulk Actions
                                                    </label>
                                                    <div class="dropdown-menu" style="">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal-activate">
                                                            Set as Active
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Set as Inactive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Set as Suspended
                                                        </a>
                                                    </div>
                                                </div> --}}
                                                <div>
                                                    <div class="btn-group" role="group">
                                                        <span class="text-end">
                                                            <button href="./" class="btn align-text-top btn-primary"
                                                                data-bs-boundary="viewport" data-bs-toggle="modal"
                                                                data-bs-target="#modal-add">Add Service</button>
                                                        </span>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <input type="radio" class="btn-check"
                                                            name="btn-radio-vertical-dropdown"
                                                            id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                                        <label for="btn-radio-vertical-dropdown-dropdown" class="btn"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Filter <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-filter ms-1">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
                                                            </svg>
                                                        </label>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal" data-bs-target="#modal-activate">
                                                                Set as Active
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                Set as Inactive
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                Set as Suspended
                                                            </a>
                                                        </div>

                                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                                            id="btn-radio-toolbar-6" autocomplete="off">
                                                        <label for="btn-radio-toolbar-6" class="btn btn-icon"
                                                            title="Edit Table">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-table-column">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                                                                <path d="M10 10h11" />
                                                                <path d="M10 3v18" />
                                                                <path d="M9 3l-6 6" />
                                                                <path d="M10 7l-7 7" />
                                                                <path d="M10 12l-7 7" />
                                                                <path d="M10 17l-4 4" />
                                                            </svg>
                                                        </label>
                                                        <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                                            id="btn-radio-dropdown-dropdown" autocomplete="off">

                                                        <div class="dropdown-menu"
                                                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 38px, 0px);"
                                                            data-popper-placement="bottom-start">
                                                            <a class="dropdown-item" href="#">
                                                                PDF
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                Excel
                                                            </a>

                                                            <a class="dropdown-item" href="#">
                                                                External ERP
                                                            </a>
                                                        </div>
                                                        <label for="btn-radio-toolbar-7" class="btn btn-icon"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            title="Export to...">
                                                            <!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-download">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />
                                                                <path d="M12 13l0 9" />
                                                                <path d="M9 19l3 3l3 -3" />
                                                            </svg>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-body border-bottom py-3">
                                                <div class="d-flex">
                                                    <div class="text-muted">
                                                        Show
                                                        <div class="mx-2 d-inline-block">
                                                            <input type="text" class="form-control form-control-sm"
                                                                value="8" size="3"
                                                                aria-label="Invoices count">
                                                        </div>
                                                        entries
                                                    </div>
                                                    <div class="ms-auto text-muted">
                                                        Search:
                                                        <div class="ms-2 d-inline-block">
                                                            <input type="text" class="form-control form-control-sm"
                                                                aria-label="Search invoice">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table card-table table-vcenter text-nowrap datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="w-1"><input
                                                                    class="form-check-input m-0 align-middle"
                                                                    type="checkbox">
                                                            </th>
                                                            <th class="w-1">ID</th>
                                                            <th>Service Plan</th>
                                                            <th>Description</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Billing Start Date</th>
                                                            <th>Billing End Date</th>
                                                            <th>Charge Period</th>
                                                            <th>Invoiced Until</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input m-0 align-middle"
                                                                    type="checkbox" aria-label="Select invoice"></td>
                                                            <td><span class="text-muted">01</span></td>
                                                            <td><a href="{{ route('admin-recurring-service-view') }}"
                                                                    tabindex="-1">SAP
                                                                    Business One</a></td>
                                                            <td>
                                                                SAP Business One On-Premise
                                                            </td>
                                                            <td><span>GHC </span>5000.00
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                01/02/2025
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                Quarterly
                                                            </td>
                                                            <td>
                                                                31/03/2025
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-outline text-green">Active</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex justify-content-ecenter gap-2">
                                                                    <!-- View Action -->
                                                                    <a href="" class="text-primary me-1"
                                                                        title="View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal-view">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                fill="none" />
                                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                            <path
                                                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                                        </svg>
                                                                    </a>

                                                                    <!-- Change Plan -->
                                                                    <a href="" class="text-primary me-1"
                                                                        title="Change Plan" data-bs-toggle="modal"
                                                                        data-bs-target="#modal-change">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-exchange">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                fill="none" />
                                                                            <path
                                                                                d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                                            <path
                                                                                d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                                            <path
                                                                                d="M19 8v5a5 5 0 0 1 -5 5h-3l3 -3m0 6l-3 -3" />
                                                                            <path
                                                                                d="M5 16v-5a5 5 0 0 1 5 -5h3l-3 -3m0 6l3 -3" />
                                                                        </svg>
                                                                    </a>

                                                                    <!-- Delete Action -->
                                                                    <a href="#" class="text-danger me-1"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modal-danger" title="Delete">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                fill="none" />
                                                                            <path d="M4 7l16 0" />
                                                                            <path d="M10 11l0 6" />
                                                                            <path d="M14 11l0 6" />
                                                                            <path
                                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                            <path
                                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer d-flex align-items-center">
                                                <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of
                                                    <span>16</span>
                                                    entries
                                                </p>
                                                <ul class="pagination m-0 ms-auto">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1"
                                                            aria-disabled="true">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M15 6l-6 6l6 6" />
                                                            </svg>
                                                            prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">
                                                            next
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M9 6l6 6l-6 6" />
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Customer's Billing -->
                        <div class="tab-pane" id="tabs-billing" role="tabpanel">

                            <div class="row row-card">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs"
                                                role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a href="#tabs-home-8" class="nav-link active" data-bs-toggle="tab"
                                                        aria-selected="true" role="tab">Financial Documents</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a href="#tabs-profile-8" class="nav-link" data-bs-toggle="tab"
                                                        aria-selected="false" tabindex="-1"
                                                        role="tab">Transactions</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a href="#tabs-activity-8" class="nav-link" data-bs-toggle="tab"
                                                        aria-selected="false" tabindex="-1" role="tab">Billing
                                                        Config</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <!-- Financial Documents -->
                                                <div class="tab-pane fade active show" id="tabs-home-8" role="tabpanel">
                                                    <div class="row row-card">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header justify-content-end">
                                                                    <div>
                                                                        <div class="btn-group" role="group">
                                                                            <span class="text-end">
                                                                                <button href="./"
                                                                                    class="btn align-text-top btn-primary"
                                                                                    data-bs-boundary="viewport"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#modal-add">Add
                                                                                    Transaction</button>
                                                                            </span>
                                                                        </div>
                                                                        <div class="btn-group" role="group">
                                                                            <input type="radio" class="btn-check"
                                                                                name="btn-radio-vertical-dropdown"
                                                                                id="btn-radio-vertical-dropdown-dropdown"
                                                                                autocomplete="off">
                                                                            <label
                                                                                for="btn-radio-vertical-dropdown-dropdown"
                                                                                class="btn" data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                Filter <svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-filter ms-1">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path
                                                                                        d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
                                                                                </svg>
                                                                            </label>
                                                                            <div class="dropdown-menu" style="">
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#modal-activate">
                                                                                    Set as Active
                                                                                </a>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Set as Inactive
                                                                                </a>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Set as Suspended
                                                                                </a>
                                                                            </div>

                                                                            <input type="radio" class="btn-check"
                                                                                name="btn-radio-toolbar"
                                                                                id="btn-radio-toolbar-6"
                                                                                autocomplete="off">
                                                                            <label for="btn-radio-toolbar-6"
                                                                                class="btn btn-icon" title="Edit Table">
                                                                                <!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-table-column">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path
                                                                                        d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                                                                                    <path d="M10 10h11" />
                                                                                    <path d="M10 3v18" />
                                                                                    <path d="M9 3l-6 6" />
                                                                                    <path d="M10 7l-7 7" />
                                                                                    <path d="M10 12l-7 7" />
                                                                                    <path d="M10 17l-4 4" />
                                                                                </svg>
                                                                            </label>
                                                                            <input type="radio" class="btn-check"
                                                                                name="btn-radio-toolbar"
                                                                                id="btn-radio-dropdown-dropdown"
                                                                                autocomplete="off">

                                                                            <div class="dropdown-menu"
                                                                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 38px, 0px);"
                                                                                data-popper-placement="bottom-start">
                                                                                <a class="dropdown-item" href="#">
                                                                                    PDF
                                                                                </a>
                                                                                <a class="dropdown-item" href="#">
                                                                                    Excel
                                                                                </a>

                                                                                <a class="dropdown-item" href="#">
                                                                                    External ERP
                                                                                </a>
                                                                            </div>
                                                                            <label for="btn-radio-toolbar-7"
                                                                                class="btn btn-icon"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false"
                                                                                title="Export to...">
                                                                                <!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-download">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path
                                                                                        d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />
                                                                                    <path d="M12 13l0 9" />
                                                                                    <path d="M9 19l3 3l3 -3" />
                                                                                </svg>
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="card-body border-bottom py-3">
                                                                    <div class="d-flex">
                                                                        <div class="text-muted">
                                                                            Show
                                                                            <div class="mx-2 d-inline-block">
                                                                                <input type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    value="8" size="3"
                                                                                    aria-label="Invoices count">
                                                                            </div>
                                                                            entries
                                                                        </div>
                                                                        <div class="ms-auto text-muted">
                                                                            Search:
                                                                            <div class="ms-2 d-inline-block">
                                                                                <input type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    aria-label="Search invoice">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table
                                                                        class="table card-table table-vcenter text-nowrap datatable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="w-1"><input
                                                                                        class="form-check-input m-0 align-middle"
                                                                                        type="checkbox"></th>
                                                                                <th class="w-1">ID</th>
                                                                                <th>Type</th>
                                                                                <th>Invoice No</th>
                                                                                <th>Date</th>
                                                                                <th>Total</th>
                                                                                <th>Amt Due</th>
                                                                                <th>Payment Date</th>
                                                                                <th>Pay Status
                                                                                </th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><input
                                                                                        class="form-check-input m-0 align-middle"
                                                                                        type="checkbox"
                                                                                        aria-label="Select transaction">
                                                                                </td>
                                                                                <td><span class="text-muted">01</span>
                                                                                </td>
                                                                                <td><span class="badge bg-dark">Recurring
                                                                                        Invoice</span></td>
                                                                                <td><a href="">20240000023</a>
                                                                                </td>
                                                                                <td>01/02/2025</td>
                                                                                <td>GHC 5000.00</td>
                                                                                <td>GHC 5000.00</td>
                                                                                <td>-</td>
                                                                                <td><span
                                                                                        class="badge bg-warning">Unpaid</span>
                                                                                </td>
                                                                                <td class="text-end">
                                                                                    <div
                                                                                        class="d-flex justify-content-center gap-2">
                                                                                        <!-- Recieve Pay Action -->
                                                                                        <a href=""
                                                                                            class="text-primary me-1"
                                                                                            title="Pay"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#modal-pay-invoice">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-cash">
                                                                                                <path stroke="none"
                                                                                                    d="M0 0h24v24H0z"
                                                                                                    fill="none" />
                                                                                                <path
                                                                                                    d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                                                                                                <path
                                                                                                    d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                                                                <path
                                                                                                    d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
                                                                                            </svg>
                                                                                        </a>
                                                                                        <!-- View Action -->
                                                                                        <a href="" target="_blank"
                                                                                            class="text-primary me-1"
                                                                                            title="Preview PDF">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-pdf">
                                                                                                <path stroke="none"
                                                                                                    d="M0 0h24v24H0z"
                                                                                                    fill="none" />
                                                                                                <path
                                                                                                    d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                                                                <path
                                                                                                    d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                                                                <path
                                                                                                    d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                                                                                <path d="M17 18h2" />
                                                                                                <path d="M20 15h-3v6" />
                                                                                                <path
                                                                                                    d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                                                                            </svg>
                                                                                        </a>
                                                                                        <!-- Download Action -->
                                                                                        <a href=""
                                                                                            class="text-primary me-1"
                                                                                            title="Download"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#modal-view">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-download">
                                                                                                <path stroke="none"
                                                                                                    d="M0 0h24v24H0z"
                                                                                                    fill="none" />
                                                                                                <path
                                                                                                    d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                                                                                <path d="M7 11l5 5l5 -5" />
                                                                                                <path d="M12 4l0 12" />
                                                                                            </svg>
                                                                                        </a>
                                                                                        <!-- Edit Action -->
                                                                                        <a href=""
                                                                                            class="text-primary me-1"
                                                                                            title="Edit"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#modal-edit-invoice">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-minus">
                                                                                                <path stroke="none"
                                                                                                    d="M0 0h24v24H0z"
                                                                                                    fill="none" />
                                                                                                <path
                                                                                                    d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                                                                                <path d="M13.5 6.5l4 4" />
                                                                                                <path d="M16 19h6" />
                                                                                            </svg>
                                                                                        </a>
                                                                                        <!-- Send Action -->
                                                                                        <a href=""
                                                                                            class="text-primary me-1"
                                                                                            title="Send"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#modal-view">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-send-2">
                                                                                                <path stroke="none"
                                                                                                    d="M0 0h24v24H0z"
                                                                                                    fill="none" />
                                                                                                <path
                                                                                                    d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z" />
                                                                                                <path d="M6.5 12h14.5" />
                                                                                            </svg>
                                                                                        </a>
                                                                                        <!-- Delete Action -->
                                                                                        <a href="#"
                                                                                            class="text-danger me-1"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#modal-danger"
                                                                                            title="Delete">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                                                <path stroke="none"
                                                                                                    d="M0 0h24v24H0z"
                                                                                                    fill="none" />
                                                                                                <path d="M4 7l16 0" />
                                                                                                <path d="M10 11l0 6" />
                                                                                                <path d="M14 11l0 6" />
                                                                                                <path
                                                                                                    d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                                                <path
                                                                                                    d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                                <div class="card-footer d-flex align-items-center">
                                                                    <p class="m-0 text-muted">Showing <span>1</span> to
                                                                        <span>8</span> of
                                                                        <span>16</span>
                                                                        entries
                                                                    </p>
                                                                    <ul class="pagination m-0 ms-auto">
                                                                        <li class="page-item disabled">
                                                                            <a class="page-link" href="#"
                                                                                tabindex="-1" aria-disabled="true">
                                                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="icon" width="24"
                                                                                    height="24" viewBox="0 0 24 24"
                                                                                    stroke-width="2" stroke="currentColor"
                                                                                    fill="none" stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path d="M15 6l-6 6l6 6" />
                                                                                </svg>
                                                                                prev
                                                                            </a>
                                                                        </li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">1</a></li>
                                                                        <li class="page-item active"><a class="page-link"
                                                                                href="#">2</a>
                                                                        </li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">3</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">4</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">5</a></li>
                                                                        <li class="page-item">
                                                                            <a class="page-link" href="#">
                                                                                next
                                                                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="icon" width="24"
                                                                                    height="24" viewBox="0 0 24 24"
                                                                                    stroke-width="2" stroke="currentColor"
                                                                                    fill="none" stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path d="M9 6l6 6l-6 6" />
                                                                                </svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Transactions -->
                                                <div class="tab-pane fade" id="tabs-profile-8" role="tabpanel">
                                                    <div class="row row-card">
                                                        <div class="col-12">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-header justify-content-end">
                                                                        <div>
                                                                            <div class="btn-group" role="group">
                                                                                <span class="text-end">
                                                                                    <button href="./"
                                                                                        class="btn align-text-top btn-primary"
                                                                                        data-bs-boundary="viewport"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#modal-add">Add
                                                                                        Transaction</button>
                                                                                </span>
                                                                            </div>
                                                                            <div class="btn-group" role="group">
                                                                                <input type="radio" class="btn-check"
                                                                                    name="btn-radio-vertical-dropdown"
                                                                                    id="btn-radio-vertical-dropdown-dropdown"
                                                                                    autocomplete="off">
                                                                                <label
                                                                                    for="btn-radio-vertical-dropdown-dropdown"
                                                                                    class="btn"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false">
                                                                                    Filter <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-filter ms-1">
                                                                                        <path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none" />
                                                                                        <path
                                                                                            d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
                                                                                    </svg>
                                                                                </label>
                                                                                <div class="dropdown-menu" style="">
                                                                                    <a class="dropdown-item"
                                                                                        href="#"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#modal-activate">
                                                                                        Set as Active
                                                                                    </a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        Set as Inactive
                                                                                    </a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        Set as Suspended
                                                                                    </a>
                                                                                </div>

                                                                                <input type="radio" class="btn-check"
                                                                                    name="btn-radio-toolbar"
                                                                                    id="btn-radio-toolbar-6"
                                                                                    autocomplete="off">
                                                                                <label for="btn-radio-toolbar-6"
                                                                                    class="btn btn-icon"
                                                                                    title="Edit Table">
                                                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-table-column">
                                                                                        <path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none" />
                                                                                        <path
                                                                                            d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                                                                                        <path d="M10 10h11" />
                                                                                        <path d="M10 3v18" />
                                                                                        <path d="M9 3l-6 6" />
                                                                                        <path d="M10 7l-7 7" />
                                                                                        <path d="M10 12l-7 7" />
                                                                                        <path d="M10 17l-4 4" />
                                                                                    </svg>
                                                                                </label>
                                                                                <input type="radio" class="btn-check"
                                                                                    name="btn-radio-toolbar"
                                                                                    id="btn-radio-dropdown-dropdown"
                                                                                    autocomplete="off">

                                                                                <div class="dropdown-menu"
                                                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 38px, 0px);"
                                                                                    data-popper-placement="bottom-start">
                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        PDF
                                                                                    </a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        Excel
                                                                                    </a>

                                                                                    <a class="dropdown-item"
                                                                                        href="#">
                                                                                        External ERP
                                                                                    </a>
                                                                                </div>
                                                                                <label for="btn-radio-toolbar-7"
                                                                                    class="btn btn-icon"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"
                                                                                    title="Export to...">
                                                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-download">
                                                                                        <path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none" />
                                                                                        <path
                                                                                            d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />
                                                                                        <path d="M12 13l0 9" />
                                                                                        <path d="M9 19l3 3l3 -3" />
                                                                                    </svg>
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="card-body border-bottom py-3">
                                                                        <div class="d-flex">
                                                                            <div class="text-muted">
                                                                                Show
                                                                                <div class="mx-2 d-inline-block">
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        value="8" size="3"
                                                                                        aria-label="Invoices count">
                                                                                </div>
                                                                                entries
                                                                            </div>
                                                                            <div class="ms-auto text-muted">
                                                                                Search:
                                                                                <div class="ms-2 d-inline-block">
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        aria-label="Search invoice">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table
                                                                            class="table card-table table-vcenter text-nowrap datatable">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="w-1"><input
                                                                                            class="form-check-input m-0 align-middle"
                                                                                            type="checkbox"></th>
                                                                                    <th class="w-1">ID</th>
                                                                                    <th>Transaction Date</th>
                                                                                    <th>Transaction Type</th>
                                                                                    <th>Service Description</th>
                                                                                    <th>Quantity</th>
                                                                                    <th>Unit Price</th>
                                                                                    <th>Debit Amount</th>
                                                                                    <th>Credit Amount</th>
                                                                                    <th>Taxes <span class="form-help"
                                                                                            data-bs-toggle="popover"
                                                                                            data-bs-placement="top"
                                                                                            data-bs-trigger="hover"
                                                                                            data-bs-content="<span>Hover over each Tax Total to view its detailed breakdown.</span>"
                                                                                            data-bs-html="true">?</span>
                                                                                    </th>
                                                                                    <th>Total</th>
                                                                                    <th>From Date</th>
                                                                                    <th>To Date</th>
                                                                                    <th>Invoice No</th>
                                                                                    <th>Actions</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><input
                                                                                            class="form-check-input m-0 align-middle"
                                                                                            type="checkbox"
                                                                                            aria-label="Select transaction">
                                                                                    </td>
                                                                                    <td><span class="text-muted">01</span>
                                                                                    </td>
                                                                                    <td>01/02/2025</td>
                                                                                    <td>Debit</td>
                                                                                    <td>SAP Business One On-Premise</td>
                                                                                    <td>2</td>
                                                                                    <td>GHC 5000.00</td>
                                                                                    <td>GHC 10000.00</td>
                                                                                    <td>-</td>
                                                                                    <td><a class="tax-popover"
                                                                                            data-bs-toggle="popover"
                                                                                            data-bs-placement="bottom"
                                                                                            data-bs-trigger="hover"
                                                                                            data-bs-html="true"
                                                                                            data-bs-content="<span mb-1>E-Levy 2.5%: GHC700</span><br><span>NHIL 2.5%: GHC700</span><br><span>Covid-19 1%: GHC700</span><br><span>VAT 15 on tax%: GHC700</span><br><span>Total VAT 15%: GHC700</span>">
                                                                                            GHC 2765.00
                                                                                        </a></td>
                                                                                    <td>GHC 12765.00</td>
                                                                                    <td>01/02/2025</td>
                                                                                    <td>31/03/2025</td>
                                                                                    <td><a href="">20240000023</a>
                                                                                    </td>
                                                                                    <td class="text-end">
                                                                                        <div
                                                                                            class="d-flex justify-content-center gap-2">
                                                                                            <!-- View Action -->
                                                                                            <a href=""
                                                                                                class="text-primary me-1"
                                                                                                title="View"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#modal-view">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="24"
                                                                                                    height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                                                                    <path stroke="none"
                                                                                                        d="M0 0h24v24H0z"
                                                                                                        fill="none" />
                                                                                                    <path
                                                                                                        d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                                                    <path
                                                                                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                                                                </svg>
                                                                                            </a>
                                                                                            <!-- Delete Action -->
                                                                                            <a href="#"
                                                                                                class="text-danger me-1"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#modal-danger"
                                                                                                title="Delete">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="24"
                                                                                                    height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                                                    <path stroke="none"
                                                                                                        d="M0 0h24v24H0z"
                                                                                                        fill="none" />
                                                                                                    <path d="M4 7l16 0" />
                                                                                                    <path d="M10 11l0 6" />
                                                                                                    <path d="M14 11l0 6" />
                                                                                                    <path
                                                                                                        d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                                                    <path
                                                                                                        d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                    <div class="card-footer d-flex align-items-center">
                                                                        <p class="m-0 text-muted">Showing <span>1</span> to
                                                                            <span>8</span> of
                                                                            <span>16</span>
                                                                            entries
                                                                        </p>
                                                                        <ul class="pagination m-0 ms-auto">
                                                                            <li class="page-item disabled">
                                                                                <a class="page-link" href="#"
                                                                                    tabindex="-1" aria-disabled="true">
                                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="icon" width="24"
                                                                                        height="24" viewBox="0 0 24 24"
                                                                                        stroke-width="2"
                                                                                        stroke="currentColor"
                                                                                        fill="none"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round">
                                                                                        <path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none" />
                                                                                        <path d="M15 6l-6 6l6 6" />
                                                                                    </svg>
                                                                                    prev
                                                                                </a>
                                                                            </li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                    href="#">1</a></li>
                                                                            <li class="page-item active"><a
                                                                                    class="page-link" href="#">2</a>
                                                                            </li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                    href="#">3</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                    href="#">4</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                    href="#">5</a></li>
                                                                            <li class="page-item">
                                                                                <a class="page-link" href="#">
                                                                                    next
                                                                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="icon" width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        stroke-width="2"
                                                                                        stroke="currentColor"
                                                                                        fill="none"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round">
                                                                                        <path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none" />
                                                                                        <path d="M9 6l6 6l-6 6" />
                                                                                    </svg>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Billing Config -->
                                                <div class="tab-pane fade" id="tabs-activity-8" role="tabpanel">
                                                    <div class="row justify-content-between">
                                                        <!-- Billing Settings -->
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <form>
                                                                    <div class="card-body  mx-4 justify-content-end">
                                                                        <h3 class="card-title">Billing Settings</h3>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-3 col-form-label">Billing
                                                                                enabled
                                                                            </label>
                                                                            <div class="col-auto align-self-center">
                                                                                <span class="col-auto">
                                                                                    <label
                                                                                        class="form-check form-check-single form-switch">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox"
                                                                                            checked="">
                                                                                    </label>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-3 col-form-label">Payment
                                                                                Period</label>
                                                                            <div class="col">
                                                                                <select class="form-select">
                                                                                    <option>Daily</option>
                                                                                    <option>Weekly</option>
                                                                                    <option>Monthly</option>
                                                                                    <option>Quarterly</option>
                                                                                    <option>Bi-Annual</option>
                                                                                    <option>Annual</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-3 col-form-label">Billing
                                                                                Day
                                                                                <small>(automatic document date)</small><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-primary"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Billing day is the automatic date of invoice creation and
                                                                                also the start of the billing period (for one month).
                                                                                Example: Setting to 1 means billing from the 1st to the end of the month
                                                                                and 10 means billing from the 10th to the 9th of the next month.">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path
                                                                                        d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                                                    <path d="M12 9h.01" />
                                                                                    <path d="M11 12h1v4h1" />
                                                                                </svg></label>
                                                                            <div class="col">
                                                                                <select class="form-select">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                    <option>9</option>
                                                                                    <option>10</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3 row">
                                                                            <label class="col-3 col-form-label">Payment
                                                                                due<small> (days after document
                                                                                    date)</small> <svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-primary"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="The number of days after the document date
                                                                                that the payment is due (shown on the invoice).">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path
                                                                                        d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                                                    <path d="M12 9h.01" />
                                                                                    <path d="M11 12h1v4h1" />
                                                                                </svg></label>
                                                                            <div class="col">
                                                                                <select class="form-select">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                    <option>9</option>
                                                                                    <option>10</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-3 col-form-label">Blocking
                                                                                period<small> (days after payment
                                                                                    due)</small> <svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-primary"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="The number of days after the payment is due
                                                                                that the account is eligible to be blocked if the
                                                                                account balance is less than the minimal balance.">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path
                                                                                        d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                                                    <path d="M12 9h.01" />
                                                                                    <path d="M11 12h1v4h1" />
                                                                                </svg></label>
                                                                            <div class="col">
                                                                                <select class="form-select">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                    <option>9</option>
                                                                                    <option>10</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label
                                                                                class="col-3 col-form-label">Auto-create
                                                                                invoices <svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-primary"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    data-bs-title="Disabling this feature will remove the ability to create recurring invoices and only create related transactions (one-time invoices can still be created).">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none" />
                                                                                    <path
                                                                                        d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                                                    <path d="M12 9h.01" />
                                                                                    <path d="M11 12h1v4h1" />
                                                                                </svg>
                                                                            </label>
                                                                            <div class="col-auto align-self-center">
                                                                                <span class="col-auto">
                                                                                    <label
                                                                                        class="form-check form-check-single form-switch">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox"
                                                                                            checked="">
                                                                                    </label>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-3 col-form-label">Send
                                                                                billing notifications
                                                                            </label>
                                                                            <div class="col-auto align-self-center">
                                                                                <span class="col-auto">
                                                                                    <label
                                                                                        class="form-check form-check-single form-switch">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox">
                                                                                    </label>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <!-- Billing ddress -->
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card mb-3">

                                                                <div class="card-body  mx-4 justify-content-end">
                                                                    <h3 class="card-title">Billing Address
                                                                        <small class="d-block text-secondary">Customer
                                                                            Address is used by
                                                                            default if these fields are empty</small>
                                                                    </h3>
                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Billing name
                                                                        </label>
                                                                        <div class="col">
                                                                            <input type="email" class="form-control"
                                                                                aria-describedby="emailHelp"
                                                                                placeholder="Eg: 23355*****10">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Billing
                                                                            street</label>
                                                                        <div class="col">
                                                                            <input type="email" class="form-control"
                                                                                aria-describedby="emailHelp"
                                                                                placeholder="Enter Point of Contact Number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Billing ZIP
                                                                            code</label>
                                                                        <div class="col">
                                                                            <input type="email" class="form-control"
                                                                                aria-describedby="emailHelp"
                                                                                placeholder="Enter email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Billing
                                                                            city</label>
                                                                        <div class="col">
                                                                            <input type="email" class="form-control"
                                                                                aria-describedby="emailHelp"
                                                                                placeholder="Enter billing email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-3">
                                                                <div class="card-body  mx-4 justify-content-end">
                                                                    <h3 class="card-title">Reminders</h3>

                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Enable
                                                                            Reminders
                                                                        </label>
                                                                        <div class="col-auto align-self-center">
                                                                            <span class="col-auto">
                                                                                <label
                                                                                    class="form-check form-check-single form-switch">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox">
                                                                                </label>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Message type
                                                                        </label>
                                                                        <div class="col">
                                                                            <select class="form-select">
                                                                                <option>Email</option>
                                                                                <option>SMS</option>
                                                                                <option>Email & SMS</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Reminder #1
                                                                            day
                                                                        </label>
                                                                        <div class="col">
                                                                            <select class="form-select">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Reminder #2
                                                                            day
                                                                        </label>
                                                                        <div class="col">
                                                                            <select class="form-select">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    <div class="mb-3 row">
                                                                        <label class="col-3 col-form-label">Reminder #3
                                                                            day
                                                                        </label>
                                                                        <div class="col">
                                                                            <select class="form-select">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Customer's Documents -->
                        <div class="tab-pane" id="tabs-doc" role="tabpanel">

                            <div class="row row-card">

                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-header justify-content-between">
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check"
                                                    name="btn-radio-vertical-dropdown"
                                                    id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                                <label for="btn-radio-vertical-dropdown-dropdown"
                                                    class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Bulk Actions
                                                </label>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal-activate">
                                                        Set as Active
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Set as Inactive
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Set as Suspended
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="btn-group" role="group">
                                                    <input type="radio" class="btn-check"
                                                        name="btn-radio-vertical-dropdown"
                                                        id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                                    <label for="btn-radio-vertical-dropdown-dropdown" class="btn"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Filter <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-filter ms-1">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
                                                        </svg>
                                                    </label>
                                                    <div class="dropdown-menu" style="">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal-activate">
                                                            Set as Active
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Set as Inactive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Set as Suspended
                                                        </a>
                                                    </div>

                                                    <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                                        id="btn-radio-toolbar-6" autocomplete="off">
                                                    <label for="btn-radio-toolbar-6" class="btn btn-icon"
                                                        title="Edit Table">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-table-column">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                                                            <path d="M10 10h11" />
                                                            <path d="M10 3v18" />
                                                            <path d="M9 3l-6 6" />
                                                            <path d="M10 7l-7 7" />
                                                            <path d="M10 12l-7 7" />
                                                            <path d="M10 17l-4 4" />
                                                        </svg>
                                                    </label>
                                                    <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                                        id="btn-radio-dropdown-dropdown" autocomplete="off">

                                                    <div class="dropdown-menu"
                                                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 38px, 0px);"
                                                        data-popper-placement="bottom-start">
                                                        <a class="dropdown-item" href="#">
                                                            PDF
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Excel
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            External ERP
                                                        </a>
                                                    </div>
                                                    <label for="btn-radio-toolbar-7" class="btn btn-icon"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        title="Export to...">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-download">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />
                                                            <path d="M12 13l0 9" />
                                                            <path d="M9 19l3 3l3 -3" />
                                                        </svg>
                                                    </label>
                                                </div>


                                                <div class="btn-group" role="group">
                                                    <span class="text-end">
                                                        <button href="./"
                                                            class="btn align-text-top btn-outline-primary"
                                                            data-bs-boundary="viewport" data-bs-toggle="modal"
                                                            data-bs-target="#modal-upload">Upload</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body border-bottom py-3">
                                            <div class="d-flex">
                                                <div class="text-muted">
                                                    Show
                                                    <div class="mx-2 d-inline-block">
                                                        <input type="text" class="form-control form-control-sm"
                                                            value="8" size="3" aria-label="Invoices count">
                                                    </div>
                                                    entries
                                                </div>
                                                <div class="ms-auto text-muted">
                                                    Search:
                                                    <div class="ms-2 d-inline-block">
                                                        <input type="text" class="form-control form-control-sm"
                                                            aria-label="Search invoice">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table card-table table-vcenter text-nowrap datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="w-1"><input
                                                                class="form-check-input m-0 align-middle"
                                                                type="checkbox">
                                                        </th>
                                                        <th class="w-1">ID</th>
                                                        <th>Title</th>
                                                        <th>Added By</th>
                                                        <th>Date Added</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-check-input m-0 align-middle"
                                                                type="checkbox" aria-label="Select invoice"></td>
                                                        <td><span class="text-muted">01</span></td>
                                                        <td><a href="#" class="text-reset" tabindex="-1">Survey
                                                                Report</a></td>
                                                        <td>
                                                            <span class=""></span>
                                                            Herty Turkson
                                                        </td>
                                                        <td>
                                                            17th Sept, 23
                                                        </td>
                                                        <td>Full Solution site survey report for Tropo</td>
                                                        <td>
                                                            <span class="badge badge-outline text-green">Completed</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="d-flex justify-content-ecenter gap-2">
                                                                <!-- View Action -->
                                                                <a href="#" target="_blank"
                                                                    class="text-primary me-1" title="Preview">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                                        <path
                                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                                        <path d="M16 5l3 3" />
                                                                    </svg>
                                                                </a>

                                                                <!-- Download Action -->
                                                                <a href="" class="text-primary me-1"
                                                                    title="Download">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-download">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                                                        <path d="M7 11l5 5l5 -5" />
                                                                        <path d="M12 4l0 12" />
                                                                    </svg>
                                                                </a>

                                                                <!-- Delete Action -->
                                                                <a href="#" class="text-danger me-1"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-danger" title="Delete">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path d="M4 7l16 0" />
                                                                        <path d="M10 11l0 6" />
                                                                        <path d="M14 11l0 6" />
                                                                        <path
                                                                            d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                        <path
                                                                            d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer d-flex align-items-center">
                                            <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of
                                                <span>16</span>
                                                entries
                                            </p>
                                            <ul class="pagination m-0 ms-auto">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1"
                                                        aria-disabled="true">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M15 6l-6 6l6 6" />
                                                        </svg>
                                                        prev
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">4</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">5</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">
                                                        next
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M9 6l6 6l-6 6" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lead Management -->
                        <div class="tab-pane" id="tabs-lead" role="tabpanel">
                            <div class="row row-card">

                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header justify-content-between">
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check"
                                                    name="btn-radio-vertical-dropdown"
                                                    id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                                <label for="btn-radio-vertical-dropdown-dropdown"
                                                    class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Bulk Actions
                                                </label>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal-activate">
                                                        Set as Active
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Set as Inactive
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Set as Suspended
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check"
                                                    name="btn-radio-vertical-dropdown"
                                                    id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                                <label for="btn-radio-vertical-dropdown-dropdown" class="btn"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Filter <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-filter ms-1">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
                                                    </svg>
                                                </label>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal-activate">
                                                        Set as Active
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Set as Inactive
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Set as Suspended
                                                    </a>
                                                </div>

                                                <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                                    id="btn-radio-toolbar-6" autocomplete="off">
                                                <label for="btn-radio-toolbar-6" class="btn btn-icon"
                                                    title="Edit Table">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-table-column">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                                                        <path d="M10 10h11" />
                                                        <path d="M10 3v18" />
                                                        <path d="M9 3l-6 6" />
                                                        <path d="M10 7l-7 7" />
                                                        <path d="M10 12l-7 7" />
                                                        <path d="M10 17l-4 4" />
                                                    </svg>
                                                </label>
                                                <input type="radio" class="btn-check" name="btn-radio-toolbar"
                                                    id="btn-radio-dropdown-dropdown" autocomplete="off">

                                                <div class="dropdown-menu"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 38px, 0px);"
                                                    data-popper-placement="bottom-start">
                                                    <a class="dropdown-item" href="#">
                                                        PDF
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Excel
                                                    </a>

                                                    <a class="dropdown-item" href="#">
                                                        External ERP
                                                    </a>
                                                </div>
                                                <label for="btn-radio-toolbar-7" class="btn btn-icon"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    title="Export to...">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-download">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />
                                                        <path d="M12 13l0 9" />
                                                        <path d="M9 19l3 3l3 -3" />
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body border-bottom py-3">
                                            <div class="d-flex">
                                                <div class="text-muted">
                                                    Show
                                                    <div class="mx-2 d-inline-block">
                                                        <input type="text" class="form-control form-control-sm"
                                                            value="8" size="3" aria-label="Invoices count">
                                                    </div>
                                                    entries
                                                </div>
                                                <div class="ms-auto text-muted">
                                                    Search:
                                                    <div class="ms-2 d-inline-block">
                                                        <input type="text" class="form-control form-control-sm"
                                                            aria-label="Search invoice">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table card-table table-vcenter text-nowrap datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="w-1"><input
                                                                class="form-check-input m-0 align-middle"
                                                                type="checkbox">
                                                        </th>
                                                        <th class="w-1">ID</th>
                                                        <th>Status</th>
                                                        <th>Quote Number</th>
                                                        <th>Date Uploaded</th>
                                                        <th>Price</th>
                                                        <th>Valid Until</th>
                                                        <th>Related Ticket No.</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-check-input m-0 align-middle"
                                                                type="checkbox" aria-label="Select invoice"></td>
                                                        <td><span class="text-muted">01</span></td>
                                                        <td>
                                                            <span class="badge badge-outline text-green">Sent</span>
                                                        </td>
                                                        <td>2025000234</td>
                                                        <td>
                                                            21/01/2025
                                                        </td>
                                                        <td><span>GHC </span>5000.00
                                                        </td>
                                                        <td>
                                                            21/02/2025
                                                        </td>
                                                        <td>
                                                            2025102001
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="d-flex justify-content-ecenter gap-2">
                                                                <!-- View/Edit -->
                                                                <a href="{{ route('admin-recurring-service-view') }}"
                                                                    class="text-primary me-1" title="View">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                                        <path
                                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                                        <path d="M16 5l3 3" />
                                                                    </svg>
                                                                </a>

                                                                <!-- Preview -->
                                                                <a href="" target="_blank"
                                                                    class="text-primary me-1" title="Preview">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-file-text">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                                        <path
                                                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                                        <path d="M9 9l1 0" />
                                                                        <path d="M9 13l6 0" />
                                                                        <path d="M9 17l6 0" />
                                                                    </svg>
                                                                </a>

                                                                <!-- Send -->
                                                                <a href="" target="_blank"
                                                                    class="text-primary me-1" title="Send">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-send-2">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z" />
                                                                        <path d="M6.5 12h14.5" />
                                                                    </svg>
                                                                </a>

                                                                <!-- Delete Action -->
                                                                <a href="#" class="text-danger me-1"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-danger" title="Delete">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path d="M4 7l16 0" />
                                                                        <path d="M10 11l0 6" />
                                                                        <path d="M14 11l0 6" />
                                                                        <path
                                                                            d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                        <path
                                                                            d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer d-flex align-items-center">
                                            <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of
                                                <span>16</span>
                                                entries
                                            </p>
                                            <ul class="pagination m-0 ms-auto">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1"
                                                        aria-disabled="true">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M15 6l-6 6l6 6" />
                                                        </svg>
                                                        prev
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">4</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">5</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">
                                                        next
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M9 6l6 6l-6 6" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tabs-settings-1" role="tabpanel">
                            <h4>Settings tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet,
                                facilisi sit mauris accumsan nibh habitant senectus</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Add New Service Modal -->
        <div class="modal modal-blur fade" id="modal-add" tabindex="-1" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Service Plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                        <form class="">

                            <div class="card-body m-3 justify-content-end border rounded-3 p-3">
                                <div class="">
                                    <h3 class="card-title">Basic Information</h3>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Plan Title</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <optgroup label="Select Status">
                                                <option>SAP Business One</option>
                                                <option>Pico Insure App</option>
                                                <option>Pico Susu App</option>
                                                <option>Pico CRM</option>
                                                <option>Payroll Application</option>
                                                <option>Total Commerce Application</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Description <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                            placeholder="SAP Business One">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Price</label>
                                    <div class="col">
                                        <input type="number" class="form-control" aria-describedby="emailHelp"
                                            placeholder="GHC 0.00">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Payment Plan Type</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <optgroup label="Select Status">
                                                <option>Daily</option>
                                                <option>Monthly</option>
                                                <option>Quarterly</option>
                                                <option>Bi-Annual</option>
                                                <option>Annual</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Payment Period</label>
                                    <div class="col">
                                        <input type="number" class="form-control" aria-describedby="emailHelp"
                                            placeholder="1">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Billing Start Date</label>
                                    <div class="col">
                                        <input type="date" class="form-control" aria-describedby="emailHelp"
                                            placeholder="1">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Billing End Date</label>
                                    <div class="col">
                                        <input type="date" class="form-control" aria-describedby="emailHelp"
                                            placeholder="1">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Status</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <optgroup label="Select Status">
                                                <option>Pending</option>
                                                <option>Active</option>
                                                <option>Disabled</option>
                                                <option>Paused</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body m-3 justify-content-end border rounded-3 p-3">
                                <div class="">
                                    <h3 class="card-title">Onetime Service <small> (Optional)</small></h3>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Onetime Service <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Select if you want to attach a onetime service bill.">
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
                                    <label class="col-3 col-form-label">Select Onetime service</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <optgroup label="Onetime Services">
                                                <option>SAP Business One</option>
                                                <option>Router Installation</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Onetime Service Price</label>
                                    <div class="col">
                                        <input type="number" class="form-control" aria-describedby="emailHelp"
                                            placeholder="GHC 0.00">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div> --}}
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <a href="#" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Update
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- View Service Modal -->
        <div class="modal modal-blur fade" id="modal-view" tabindex="-1" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">SAP Business One</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                        <form class="">

                            <div class="card-body m-3 justify-content-end border rounded-3 p-3">
                                <div class="">
                                    <h3 class="card-title">Basic Information</h3>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Plan Title</label>
                                    <div class="col">
                                        <input type="email" class="form-control" aria-describedby="emailHelp"
                                            placeholder="SAP Business One" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Description <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                            placeholder="SAP Business One">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Quantity</label>
                                    <div class="col">
                                        <input type="number" class="form-control" aria-describedby="emailHelp"
                                            placeholder="1">
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
                                    <label class="col-3 col-form-label">Payment Plan Type</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <optgroup label="Select Status">
                                                <option>Daily</option>
                                                <option>Monthly</option>
                                                <option>Quarterly</option>
                                                <option>Bi-Annual</option>
                                                <option>Annual</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Payment Period</label>
                                    <div class="col">
                                        <input type="number" class="form-control" aria-describedby="emailHelp"
                                            placeholder="1">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Billing Start Date</label>
                                    <div class="col">
                                        <input type="date" class="form-control" aria-describedby="emailHelp"
                                            placeholder="1">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Billing End Date</label>
                                    <div class="col">
                                        <input type="date" class="form-control" aria-describedby="emailHelp"
                                            placeholder="1">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Status</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <optgroup label="Select Status">
                                                <option>Pending</option>
                                                <option>Active</option>
                                                <option>Disabled</option>
                                                <option>Paused</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card-body m-3 justify-content-end border rounded-3 p-3">
                                <div class="">
                                    <h3 class="card-title">Onetime Service <small> (Optional)</small></h3>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label">Onetime Service <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                    <label class="col-3 col-form-label">Select Onetime service</label>
                                    <div class="col">
                                        <select class="form-select">
                                            <optgroup label="Onetime Services">
                                                <option>SAP Business One</option>
                                                <option>Router Installation</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Onetime Service Price</label>
                                    <div class="col">
                                        <input type="number" class="form-control" aria-describedby="emailHelp"
                                            placeholder="GHC 0.00">
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div> --}}
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <a href="#" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Update
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upload Document Modal -->
        <div class="modal modal-blur fade" id="modal-upload" tabindex="-1" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="col-12">
                            <form class="card">
                                <div class="card-body m-3 justify-content-end">
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label required">Title</label>
                                        <div class="col">
                                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label class="col-3 col-form-label">Description</label>
                                        <div class="col">
                                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label">Visisble to Customer<svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                                    <input class="form-check-input" type="checkbox">
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label required">Upload File
                                        </label>
                                        <div class=" col input-group mb-3">
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label">Related Quote
                                        </label>
                                        <div class="col">
                                            <select class="form-select">
                                                <optgroup label="Related Quotes">
                                                    <option>Select One</option>
                                                    <option>20000011920</option>
                                                    <option>20000011921</option>
                                                    <option>20000011922</option>
                                                    <option>20000011923</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label">Related Service
                                        </label>
                                        <div class="col">
                                            <select class="form-select">
                                                <optgroup label="Recurring Services">
                                                    <option>Select One</option>
                                                    <option>SAP Business One</option>
                                                    <option>Pico Insure</option>
                                                    <option>Host Control</option>
                                                    <option>Payrole Application</option>
                                                </optgroup>
                                                <optgroup label="One-time Services">
                                                    <option>SAP Business One</option>
                                                    <option>Pico Insure</option>
                                                    <option>Host Control</option>
                                                    <option>Payrole Application</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <a href="#" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Create new report
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Invoice Modal -->
        <div class="modal modal-blur fade" id="modal-edit-invoice" tabindex="-1" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Recurring Invoice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="col-12">
                            <div class="">
                                <div class="card-body">
                                    <div class="row row-cards mb-3">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Invoice Number</label>
                                                <div class="input-group mb-2">
                                                    <input type="number" class="form-control"
                                                        placeholder="2025000023" value="2025000023">
                                                    <button class="btn" type="button"
                                                        title="Generate New Number"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-rotate-clockwise-2">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M9 4.55a8 8 0 0 1 6 14.9m0 -4.45v5h5" />
                                                            <path d="M5.63 7.16l0 .01" />
                                                            <path d="M4.06 11l0 .01" />
                                                            <path d="M4.63 15.1l0 .01" />
                                                            <path d="M7.16 18.37l0 .01" />
                                                            <path d="M11 19.94l0 .01" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Invoice Date</label>
                                                <div class="input-group mb-2">
                                                    <input type="date" class="form-control"
                                                        placeholder="Search for…">
                                                    <button class="btn" type="button"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M18 6l-12 12" />
                                                            <path d="M6 6l12 12" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Payment Due Date</label>
                                                <div class="input-group mb-2">
                                                    <input type="date" class="form-control"
                                                        placeholder="Search for…">
                                                    <button class="btn" type="button"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M18 6l-12 12" />
                                                            <path d="M6 6l12 12" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Additional Note</label>
                                                <textarea class="form-control" rows="5" placeholder="Note to Customer"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Invoice Table -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 border">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th class="col-1">Quantity</th>
                                                    <th class="col-1">Unit</th>
                                                    <th>Price</th>
                                                    <th>Tax</th>
                                                    <th>With Taxes</th>
                                                    <th>Total</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-select">
                                                            <option value="STATUS_CODE" selected="">SAP Business One
                                                                License</option>
                                                            <option value="JSON_BODY">E-commerce App</option>
                                                            <option value="HEADERS">Remote Server</option>
                                                        </select>
                                                        <small class="d-block text-start">01-Jan-2025 to 28-Jan-2025 <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                                                <path d="M13.5 6.5l4 4" />
                                                            </svg></small>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" value="1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            value="20 Licenses">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="2540.9300">
                                                    </td>
                                                    <td>
                                                        <select class="form-select">
                                                            <option value="1" selected="">27.65%</option>
                                                            <option value="2">21%</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" value="550.0">
                                                    </td>
                                                    <td>
                                                        <span class="align-self-center mt-1">650.00</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex justify-content-ecenter gap-2">
                                                            <!-- View Action -->
                                                            <a href="#" target="_blank" class="text-primary"
                                                                title="Add">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-plus p-1">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M12 5l0 14" />
                                                                    <path d="M5 12l14 0" />
                                                                </svg>
                                                            </a>

                                                            <!-- Download Action -->
                                                            <a href="" class="text-primary" title="Remove">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-minus p-1">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M5 12l14 0" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <a href="#" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Update
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invoice Payment Modal -->
        <div class="modal modal-blur fade" id="modal-pay-invoice" tabindex="-1" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Make Payment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="col-12">
                            <div class="row row-cards mb-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="">Payment Type</label>
                                        <div class="col">
                                            <select class="form-select">
                                                <option>Cash</option>
                                                <option>Bank Transfer</option>
                                                <option>Debit Card</option>
                                                <option>Mobile Money</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Payment Date</label>
                                        <div class="input-group mb-2">
                                            <input type="date" class="form-control" placeholder="">
                                            <button class="btn" type="button"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M18 6l-12 12" />
                                                    <path d="M6 6l12 12" />
                                                </svg></button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Sum</label>
                                        <div class="input-group mb-2">
                                            <input type="numbe" class="form-control" placeholder="0.00"
                                                value="2025.95">
                                            <button class="btn" type="button" title="Generate New Number"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-rotate-clockwise-2">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M9 4.55a8 8 0 0 1 6 14.9m0 -4.45v5h5" />
                                                    <path d="M5.63 7.16l0 .01" />
                                                    <path d="M4.06 11l0 .01" />
                                                    <path d="M4.63 15.1l0 .01" />
                                                    <path d="M7.16 18.37l0 .01" />
                                                    <path d="M11 19.94l0 .01" />
                                                </svg></button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Sum</label>
                                        <div class="input-group mb-2">
                                            <input type="numbe" class="form-control" placeholder="0.00"
                                                value="2025-01-00023">
                                            <button class="btn" type="button" title="Generate New Number"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-rotate-clockwise-2">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M9 4.55a8 8 0 0 1 6 14.9m0 -4.45v5h5" />
                                                    <path d="M5.63 7.16l0 .01" />
                                                    <path d="M4.06 11l0 .01" />
                                                    <path d="M4.63 15.1l0 .01" />
                                                    <path d="M7.16 18.37l0 .01" />
                                                    <path d="M11 19.94l0 .01" />
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Additional Note</label>
                                        <textarea class="form-control" rows="5" placeholder="Note to Customer"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Change Service Plan -->
        <div class="modal modal-blur fade" id="modal-change" tabindex="-1" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Service Plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="col-12">
                            <form class="">

                                <div class="card-body m-3 justify-content-end border rounded-3 p-3">
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label text-end required">New Start Date</label>
                                        <div class="col">
                                            <input type="date" class="form-control" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label text-end"> Service Plan Title</label>
                                        <div class="col">
                                            <select class="form-select">
                                                <option>SAP Business One</option>
                                                <option>SAP Business One S/4 Hana</option>
                                                <option>SAP Business Objects</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body m-3 justify-content-end border rounded-3 p-3">
                                    <div class="">
                                        <h3 class="card-title">New Service Details</h3>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label text-end required">Service Plan Title</label>
                                        <div class="col">
                                            <input type="email" class="form-control" aria-describedby="emailHelp"
                                                placeholder="SAP Business One" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-3 col-form-label text-end">Description <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                        <label class="col-3 col-form-label text-end required">Price</label>
                                        <div class="col">
                                            <input type="number" class="form-control" aria-describedby="emailHelp"
                                                placeholder="0.00">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Service Modal -->
        <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status bg-danger"></div>
                    <div class="modal-body text-center py-4">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon mb-2 text-danger icon-lg">
                            <path d="M12 9v4"></path>
                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                            </path>
                            <path d="M12 16h.01"></path>
                        </svg>
                        <h3>Are you sure?</h3>
                        <div class="text-secondary">Do you really want to delete customer service <span
                                class="text-warning">SAP Business One</span>? Once done this cannot be undone.</div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="btn btn-3 w-100" data-bs-dismiss="modal">
                                        Cancel
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-danger btn-4 w-100" data-bs-dismiss="modal">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
