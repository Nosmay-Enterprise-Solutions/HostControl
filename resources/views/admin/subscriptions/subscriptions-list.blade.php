@extends('layouts.admin')

@section('title', 'Service Subscriptions')

@section('domain', 'Subscriptions')

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none position-sticky">
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
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        {{-- <span class="d-none d-sm-inline">
                            <a href="{{route('admin-recurring-service-add')}}" class="btn">
                                New view
                            </a>
                        </span> --}}
                        <a href="{{ route('admin-recurring-service-add') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Add New
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
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">

            <div class="row row-card">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown"
                                    id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                <label for="btn-radio-vertical-dropdown-dropdown" class="btn dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <input type="radio" class="btn-check" name="btn-radio-vertical-dropdown"
                                    id="btn-radio-vertical-dropdown-dropdown" autocomplete="off">
                                <label for="btn-radio-vertical-dropdown-dropdown" class="btn" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Filter <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
                                <label for="btn-radio-toolbar-6" class="btn btn-icon" title="Edit Table">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
                                <label for="btn-radio-toolbar-7" class="btn btn-icon" data-bs-toggle="dropdown"
                                    aria-expanded="false" title="Export to...">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-download">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />
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
                                        <input type="text" class="form-control form-control-sm" value="8"
                                            size="3" aria-label="Invoices count">
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
                                        <th class="w-1"><input class="form-check-input m-0 align-middle"
                                                type="checkbox">
                                        </th>
                                        <th class="w-1">ID</th>
                                        <th>Service Name</th>
                                        <th>Description</th>
                                        <th>Customer ID</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Billing Start Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">01</span></td>
                                        <td><a href="{{ route('admin-recurring-service-view') }}" tabindex="-1">SAP
                                                Business One</a></td>
                                        <td>
                                            SAP Business One On-Premise
                                        </td>

                                        <td>
                                            <a class="" href="{{ route('admin-customer-list') }}">0032</a>
                                        </td>
                                        <td><span>GHC </span>5000.00
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            01/04/2024
                                        </td>
                                        <td>
                                            <span class="badge badge-outline text-green">Active</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-ecenter gap-2">
                                                <!-- View Action -->
                                                <a href="{{ route('admin-recurring-service-view') }}"
                                                    class="text-primary me-1" title="View">
                                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                                </a>

                                                <!-- Change Plan -->
                                                <a href="" class="text-primary me-1" title="Change Plan"
                                                    data-bs-toggle="modal" data-bs-target="#modal-change">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-exchange">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                        <path d="M19 8v5a5 5 0 0 1 -5 5h-3l3 -3m0 6l-3 -3" />
                                                        <path d="M5 16v-5a5 5 0 0 1 5 -5h3l-3 -3m0 6l3 -3" />
                                                    </svg>
                                                </a>

                                                <!-- Delete Action -->
                                                <a href="#" class="text-danger me-1" data-bs-toggle="modal"
                                                    data-bs-target="#modal-danger" title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span>
                                entries
                            </p>
                            <ul class="pagination m-0 ms-auto">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M15 6l-6 6l6 6" />
                                        </svg>
                                        prev
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <div class="text-secondary">Do you really want to delete <span class="text-warning"> SAP
                                    Business One</span>? Once done this cannot be undone.</div>
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
                                <form class="card">

                                    <div class="card-body m-3 justify-content-end border rounded-3">
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label text-end required">New Start Date</label>
                                            <div class="col">
                                                <input type="date" class="form-control" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label text-end">Plan Service Name</label>
                                            <div class="col">
                                                <select class="form-select">
                                                    <option>SAP Business One</option>
                                                    <option>SAP Business One S/4 Hana</option>
                                                    <option>SAP Business Objects</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body m-3 justify-content-end border rounded-3">
                                        <div class="">
                                            <h3 class="card-title">New Service Details</h3>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label text-end required">Plan Name</label>
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

            <div class="modal modal-blur fade" id="modal-activate" tabindex="-1" aria-hidden="true"
                style="display: none;">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Plan Activation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="col-12">
                                <form class="card">
                                    <div class="card-body m-3 justify-content-end border rounded-3">
                                        <div class="">
                                            <h3 class="card-title">Activated</h3>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label text-end required">Active as at</label>
                                            <div class="col">
                                                <input type="date" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="SAP Business One">
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

        </div>

    @endsection
