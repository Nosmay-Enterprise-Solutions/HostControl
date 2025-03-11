@extends('layouts.admin')

@section('title', 'Invoices')

@section('domain', 'FInance')

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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">

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
                                        <th>Customer Name</th>
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
                                        <td><a href="{{route('admin-customer-view')}}">Tropo Farms Ltd</a>
                                        </td>
                                        <td><span
                                                class="badge bg-dark">Recurring
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
                                                <a href=""
                                                    target="_blank"
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
                                                        <path
                                                            d="M7 11l5 5l5 -5" />
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
                                                        <path
                                                            d="M13.5 6.5l4 4" />
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
                                                        <path
                                                            d="M6.5 12h14.5" />
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
                                            height="24" viewBox="0 0 24 24"
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
