@extends('layouts.admin')

@section('title', 'Tropo Farms Ltd')

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
                        {{-- @yield('title') --}}
                        Tropo Farms Ltd <span class="mx-1"> (#007) </span>
                        <span class="badge badge-sm bg-primary mx-1">
                            Remmitance
                        </span>
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
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-info" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                                        role="tab">Information</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-doc" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                        role="tab" tabindex="-1">Documents</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-quotes" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                        role="tab" tabindex="-1">Quotes</a>
                                </li>
                                <li class="nav-item ms-auto" role="presentation">
                                    <a href="#tabs-settings-1" class="nav-link" title="Settings" data-bs-toggle="tab"
                                        aria-selected="false" tabindex="-1" role="tab">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                            <path
                                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                                            </path>
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Lead Info -->
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
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
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
                                                                <input type="radio" class="btn-check"
                                                                    name="btn-radio-dropdown"
                                                                    id="btn-radio-status-dropdown" autocomplete="off">
                                                                <label for="btn-radio-status-dropdown"
                                                                    class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    Status
                                                                </label>
                                                                <div class="dropdown-menu text-center p-2">
                                                                    <button class="badge bg-warning d-block p-2 mb-1"
                                                                        href="http://127.0.0.1:8001/lead/view">New
                                                                        Enquiry</button>
                                                                    <button class="badge bg-indigo d-block p-2 mb-1"
                                                                        href="http://127.0.0.1:8001/lead/view">Qualification</button>
                                                                    <button class="badge bg-warning d-block p-2 mb-1"
                                                                        href="http://127.0.0.1:8001/lead/view">Remittance</button>
                                                                    <button class="badge bg-success d-block p-2 mb-1"
                                                                        href="http://127.0.0.1:8001/lead/view">Activation</button>
                                                                    <button class="badge bg-success d-block p-2 mb-1"
                                                                        href="http://127.0.0.1:8001/lead/view">Won</button>
                                                                </div>
                                                            </div>

                                                            {{-- Actions Button --}}
                                                            <div class="btn-group m-1" role="group">
                                                                <input type="radio" class="btn-check"
                                                                    name="btn-radio-dropdown"
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
                                                                        Delete Lead
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            {{-- Actions Button --}}
                                                            <div class="btn-group m-1" role="group">
                                                                <input type="radio" class="btn-check"
                                                                    name="btn-radio-dropdown"
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
                                                        <div class="mb-3 row">
                                                            <label class="col-3 col-form-label required">Full Name</label>
                                                            <div class="col">
                                                                <input type="email" class="form-control"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter Lead Full Names">
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
                                                            <label class="col-3 col-form-label required">Phone
                                                                Number</label>
                                                            <div class="col">
                                                                <input type="email" class="form-control"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Eg: 23355*****10">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-3 col-form-label">POC Number</label>
                                                            <div class="col">
                                                                <input type="email" class="form-control"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter Point of Contact Number">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-3 col-form-label required">Email</label>
                                                            <div class="col">
                                                                <input type="email" class="form-control"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-3 col-form-label required">Billing
                                                                Email</label>
                                                            <div class="col">
                                                                <input type="email" class="form-control"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter billing email">
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
                                                            <label class="col-3 col-form-label">Street</label>
                                                            <div class="col">
                                                                <input type="email" class="form-control"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter street">
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

                                <!-- Lead Documents -->
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
                                                    </div>
                                                    <div>
                                                        <div class="btn-group" role="group">
                                                            <input type="radio" class="btn-check"
                                                                name="btn-radio-vertical-dropdown"
                                                                id="btn-radio-vertical-dropdown-dropdown"
                                                                autocomplete="off">
                                                            <label for="btn-radio-vertical-dropdown-dropdown"
                                                                class="btn" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                Filter <svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
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
                                                                name="btn-radio-toolbar" id="btn-radio-toolbar-6"
                                                                autocomplete="off">
                                                            <label for="btn-radio-toolbar-6" class="btn btn-icon"
                                                                title="Edit Table">
                                                                <!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
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
                                                                name="btn-radio-toolbar" id="btn-radio-dropdown-dropdown"
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
                                                            <label for="btn-radio-toolbar-7" class="btn btn-icon"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                title="Export to...">
                                                                <!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
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
                                                                <td><a href="{{ route('admin-lead-view') }}"
                                                                        class="text-reset" tabindex="-1">Survey
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
                                                                    <span
                                                                        class="badge badge-outline text-green">Completed</span>
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
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
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
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
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
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
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
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M15 6l-6 6l6 6" />
                                                                </svg>
                                                                prev
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">2</a></li>
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

                                <!-- Quotes -->
                                <div class="tab-pane" id="tabs-quotes" role="tabpanel">
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
                                                                <th>Status</th>
                                                                <th>Quote Number</th>
                                                                <th>Date Uploaded</th>
                                                                <th>Price</th>
                                                                <th>Valid Until</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input class="form-check-input m-0 align-middle"
                                                                        type="checkbox" aria-label="Select invoice"></td>
                                                                <td><span class="text-muted">01</span></td>
                                                                <td>
                                                                    <span
                                                                        class="badge badge-outline text-green">Sent</span>
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
                                                                <td class="text-end">
                                                                    <div class="d-flex justify-content-ecenter gap-2">
                                                                        <!-- View/Edit -->
                                                                        <a href="{{ route('admin-recurring-service-view') }}"
                                                                            class="text-primary me-1" title="View">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
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
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
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
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
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
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
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
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M15 6l-6 6l6 6" />
                                                                </svg>
                                                                prev
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">2</a></li>
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
                                <div class="tab-pane" id="tabs-settings-1" role="tabpanel">
                                    <h4>Settings tab</h4>
                                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet,
                                        facilisi sit mauris accumsan nibh habitant senectus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- (Tablr Default) Add New Button -->
        <div class="modal modal-blur fade" id="modal-report" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="example-text-input"
                                placeholder="Your report name">
                        </div>
                        <label class="form-label">Report type</label>
                        <div class="form-selectgroup-boxes row mb-3">
                            <div class="col-lg-6">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="report-type" value="1"
                                        class="form-selectgroup-input" checked="">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Simple</span>
                                            <span class="d-block text-secondary">Provide only basic
                                                data
                                                needed for the report</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="report-type" value="1"
                                        class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                            <span class="d-block text-secondary">Insert charts and
                                                additional advanced analyses to be inserted in the
                                                report</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Report url</label>
                                    <div class="input-group input-group-flat">
                                        <span class="input-group-text">
                                            https://tabler.io/reports/
                                        </span>
                                        <input type="text" class="form-control ps-0" value="report-01"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Visibility</label>
                                    <select class="form-select">
                                        <option value="1" selected="">Private</option>
                                        <option value="2">Public</option>
                                        <option value="3">Hidden</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Client name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Reporting period</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <label class="form-label">Additional information</label>
                                    <textarea class="form-control" rows="3"></textarea>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Create new report
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- (Tablr Default) Add New Button -->
        <div class="modal modal-blur fade" id="modal-upload" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload Document</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Create new report
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
