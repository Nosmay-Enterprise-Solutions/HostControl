@extends('layouts.admin')

@section('domain', 'Administration')

@section('title', 'Admin List')

@section('content')

    <div class="page-wrapper">
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
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list d-flex">

                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="btn-radio-dropdown" id="btn-radio-dropdown-2"
                                    autocomplete="off">
                                <label for="btn-radio-dropdown-2" type="button" class="btn"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"
                                        class="me-2">
                                        <path fill="#909090" d="m24.1 2.072l5.564 5.8v22.056H8.879V30h20.856V7.945z" />
                                        <path fill="#f4f4f4" d="M24.031 2H8.808v27.928h20.856V7.873z" />
                                        <path fill="#7a7b7c" d="M8.655 3.5h-6.39v6.827h20.1V3.5z" />
                                        <path fill="#dd2025" d="M22.472 10.211H2.395V3.379h20.077z" />
                                        <path fill="#464648"
                                            d="M9.052 4.534H7.745v4.8h1.028V7.715L9 7.728a2 2 0 0 0 .647-.117a1.4 1.4 0 0 0 .493-.291a1.2 1.2 0 0 0 .335-.454a2.1 2.1 0 0 0 .105-.908a2.2 2.2 0 0 0-.114-.644a1.17 1.17 0 0 0-.687-.65a2 2 0 0 0-.409-.104a2 2 0 0 0-.319-.026m-.189 2.294h-.089v-1.48h.193a.57.57 0 0 1 .459.181a.92.92 0 0 1 .183.558c0 .246 0 .469-.222.626a.94.94 0 0 1-.524.114m3.671-2.306c-.111 0-.219.008-.295.011L12 4.538h-.78v4.8h.918a2.7 2.7 0 0 0 1.028-.175a1.7 1.7 0 0 0 .68-.491a1.9 1.9 0 0 0 .373-.749a3.7 3.7 0 0 0 .114-.949a4.4 4.4 0 0 0-.087-1.127a1.8 1.8 0 0 0-.4-.733a1.6 1.6 0 0 0-.535-.4a2.4 2.4 0 0 0-.549-.178a1.3 1.3 0 0 0-.228-.017m-.182 3.937h-.1V5.392h.013a1.06 1.06 0 0 1 .6.107a1.2 1.2 0 0 1 .324.4a1.3 1.3 0 0 1 .142.526c.009.22 0 .4 0 .549a3 3 0 0 1-.033.513a1.8 1.8 0 0 1-.169.5a1.1 1.1 0 0 1-.363.36a.67.67 0 0 1-.416.106m5.08-3.915H15v4.8h1.028V7.434h1.3v-.892h-1.3V5.43h1.4v-.892" />
                                        <path fill="#dd2025"
                                            d="M21.781 20.255s3.188-.578 3.188.511s-1.975.646-3.188-.511m-2.357.083a7.5 7.5 0 0 0-1.473.489l.4-.9c.4-.9.815-2.127.815-2.127a14 14 0 0 0 1.658 2.252a13 13 0 0 0-1.4.288Zm-1.262-6.5c0-.949.307-1.208.546-1.208s.508.115.517.939a10.8 10.8 0 0 1-.517 2.434a4.4 4.4 0 0 1-.547-2.162Zm-4.649 10.516c-.978-.585 2.051-2.386 2.6-2.444c-.003.001-1.576 3.056-2.6 2.444M25.9 20.895c-.01-.1-.1-1.207-2.07-1.16a14 14 0 0 0-2.453.173a12.5 12.5 0 0 1-2.012-2.655a11.8 11.8 0 0 0 .623-3.1c-.029-1.2-.316-1.888-1.236-1.878s-1.054.815-.933 2.013a9.3 9.3 0 0 0 .665 2.338s-.425 1.323-.987 2.639s-.946 2.006-.946 2.006a9.6 9.6 0 0 0-2.725 1.4c-.824.767-1.159 1.356-.725 1.945c.374.508 1.683.623 2.853-.91a23 23 0 0 0 1.7-2.492s1.784-.489 2.339-.623s1.226-.24 1.226-.24s1.629 1.639 3.2 1.581s1.495-.939 1.485-1.035" />
                                        <path fill="#909090" d="M23.954 2.077V7.95h5.633z" />
                                        <path fill="#f4f4f4" d="M24.031 2v5.873h5.633z" />
                                        <path fill="#fff"
                                            d="M8.975 4.457H7.668v4.8H8.7V7.639l.228.013a2 2 0 0 0 .647-.117a1.4 1.4 0 0 0 .493-.291a1.2 1.2 0 0 0 .332-.454a2.1 2.1 0 0 0 .105-.908a2.2 2.2 0 0 0-.114-.644a1.17 1.17 0 0 0-.687-.65a2 2 0 0 0-.411-.105a2 2 0 0 0-.319-.026m-.189 2.294h-.089v-1.48h.194a.57.57 0 0 1 .459.181a.92.92 0 0 1 .183.558c0 .246 0 .469-.222.626a.94.94 0 0 1-.524.114m3.67-2.306c-.111 0-.219.008-.295.011l-.235.006h-.78v4.8h.918a2.7 2.7 0 0 0 1.028-.175a1.7 1.7 0 0 0 .68-.491a1.9 1.9 0 0 0 .373-.749a3.7 3.7 0 0 0 .114-.949a4.4 4.4 0 0 0-.087-1.127a1.8 1.8 0 0 0-.4-.733a1.6 1.6 0 0 0-.535-.4a2.4 2.4 0 0 0-.549-.178a1.3 1.3 0 0 0-.228-.017m-.182 3.937h-.1V5.315h.013a1.06 1.06 0 0 1 .6.107a1.2 1.2 0 0 1 .324.4a1.3 1.3 0 0 1 .142.526c.009.22 0 .4 0 .549a3 3 0 0 1-.033.513a1.8 1.8 0 0 1-.169.5a1.1 1.1 0 0 1-.363.36a.67.67 0 0 1-.416.106m5.077-3.915h-2.43v4.8h1.028V7.357h1.3v-.892h-1.3V5.353h1.4v-.892" />
                                    </svg>Export</label>
                                <div class="btn-group" role="group">
                                    <input type="radio" class="btn-check" name="btn-radio-dropdown"
                                        id="btn-radio-dropdown-dropdown" autocomplete="off">
                                    <label for="btn-radio-dropdown-dropdown" class="btn dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    </label>
                                    <div class="dropdown-menu drop-down-lg-end" style="">
                                        <a class="dropdown-item" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 32 32" class="me-2">
                                                <path fill="#20744a" fill-rule="evenodd"
                                                    d="M28.781 4.405h-10.13V2.018L2 4.588v22.527l16.651 2.868v-3.538h10.13A1.16 1.16 0 0 0 30 25.349V5.5a1.16 1.16 0 0 0-1.219-1.095m.16 21.126H18.617l-.017-1.889h2.487v-2.2h-2.506l-.012-1.3h2.518v-2.2H18.55l-.012-1.3h2.549v-2.2H18.53v-1.3h2.557v-2.2H18.53v-1.3h2.557v-2.2H18.53v-2h10.411Z" />
                                                <path fill="#20744a"
                                                    d="M22.487 7.439h4.323v2.2h-4.323zm0 3.501h4.323v2.2h-4.323zm0 3.501h4.323v2.2h-4.323zm0 3.501h4.323v2.2h-4.323zm0 3.501h4.323v2.2h-4.323z" />
                                                <path fill="#fff" fill-rule="evenodd"
                                                    d="m6.347 10.673l2.146-.123l1.349 3.709l1.594-3.862l2.146-.123l-2.606 5.266l2.606 5.279l-2.269-.153l-1.532-4.024l-1.533 3.871l-2.085-.184l2.422-4.663z" />
                                            </svg> Export to Excel
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal"
                                data-bs-target="#modal-add" aria-label="Add New">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-2">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                                Add New
                            </a>
                            <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal"
                                data-bs-target="#modal-add" aria-label="Add New">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-2">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">

            <!-- Order Table -->
            <div class="container-xl">
                <div class="row row-deck row-cards">

                    <!-- Page body -->
                    <div class="page-body">
                        <div class="mb-5">
                            <div class="col-12">
                                <div class="card">
                                    {{-- <div class="card-header justify-content-between">
                                        <h3 class="card-title">Edit Table</h3>
                                        <div class="">
                                            <a href="#" class="btn btn-primary" aria-label="Github">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/brand-github -->
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-receipt"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" /></svg>
                                                Generate Picklist</a>

                                        </div>
                                    </div> --}}
                                    {{-- <div class="row justify-content-center m-2">
                                        <div class="col-auto">
                                            <span class="d-sm-inline">
                                                <div class="my-3">
                                                    <div class="btn-group w-100" role="group">
                                                        <div class="btn-group" role="group">
                                                            <label for="btn-radio-dropdown-dropdown"
                                                                class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Order Status

                                                            </label>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 1</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 2</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 3</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="d-sm-inline">
                                                <div class="my-3">
                                                    <div class="btn-group w-100" role="group">
                                                        <div class="btn-group" role="group">
                                                            <label for="btn-radio-dropdown-dropdown"
                                                                class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Region

                                                            </label>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 1</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 2</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 3</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="d-sm-inline">
                                                <div class="my-3">
                                                    <div class="btn-group w-100" role="group">
                                                        <div class="btn-group" role="group">
                                                            <label for="btn-radio-dropdown-dropdown"
                                                                class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Warehouse Code

                                                            </label>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 1</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 2</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 3</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="d-sm-inline">
                                                <div class="my-3">
                                                    <div class="btn-group w-100" role="group">
                                                        <div class="btn-group" role="group">
                                                            <label for="btn-radio-dropdown-dropdown"
                                                                class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">User Type

                                                            </label>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 1</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 2</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 3</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="d-sm-inline">
                                                <div class="my-3">
                                                    <div class="btn-group w-100" role="group">
                                                        <div class="btn-group" role="group">
                                                            <label for="btn-radio-dropdown-dropdown"
                                                                class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Payment Type

                                                            </label>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 1</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 2</label>
                                                                <label class="dropdown-item"><input
                                                                        class="form-check-input m-0 me-2" type="checkbox">
                                                                    Option 3</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-sm-4 col-md-2">
                                            <div class="my-3">
                                                <label class="form-label"></label>
                                                <div class="input-icon mb-2">
                                                    <input class="form-control " placeholder="Select a date"
                                                        id="datepicker-icon" value="2020-06-20" />
                                                    <span
                                                        class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                                            <path d="M16 3v4" />
                                                            <path d="M8 3v4" />
                                                            <path d="M4 11h16" />
                                                            <path d="M11 15h1" />
                                                            <path d="M12 15v3" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-2">
                                            <div class="my-3">
                                                <label class="form-label"></label>
                                                <div class="input-icon mb-2">
                                                    <input class="form-control " placeholder="Select a date"
                                                        id="datepicker-icon" value="2020-06-20" />
                                                    <span
                                                        class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                                            <path d="M16 3v4" />
                                                            <path d="M8 3v4" />
                                                            <path d="M4 11h16" />
                                                            <path d="M11 15h1" />
                                                            <path d="M12 15v3" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="my-2">
                                                <a href="#" class="btn btn-6 btn-success w-100 btn-icon"
                                                    aria-label="Github" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" data-bs-custom-class="apply-tooltip"
                                                    data-bs-title="Apply Filter">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/brand-github -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-filter-check">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M11.18 20.274l-2.18 .726v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v3" />
                                                        <path d="M15 19l2 2l4 -4" />
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="my-2">
                                                <a href="#" class="btn btn-6 btn-warning w-100 btn-icon"
                                                    aria-label="Github" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" data-bs-custom-class="refresh-tooltip"
                                                    data-bs-title="Reset Filter">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/brand-github -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>


                                    </div> --}}

                                    <div class="card-body border-bottom py-3">
                                        <div class="d-flex">
                                            <div class="text-secondary align-self-center">
                                                Show
                                                <div class="mx-2 d-inline-block">
                                                    <input type="text" class="form-control form-control-sm"
                                                        value="8" size="3" aria-label="Invoices count">
                                                </div>
                                                entries
                                            </div>

                                            <div class="ms-auto text-secondary d-flex align-items-center">
                                                Search:
                                                <div class="ms-2 d-inline-block">
                                                    <input type="text" class="form-control form-control-sm"
                                                        aria-label="Search invoice">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter datatable table-sm"
                                            style=" overflow-y: auto; max-height: 60vh;">
                                            <thead>
                                                <tr>
                                                    <th class="w-1"><input class="form-check-input m-0 align-middle"
                                                            type="checkbox" aria-label="Select all invoices"></th>
                                                    <th><button class="table-sort" data-sort="sort-name">ID</button></th>
                                                    <th><button class="table-sort" data-sort="sort-city">Admin
                                                            Login</button>
                                                    </th>
                                                    <th><button class="table-sort" data-sort="sort-type">Full
                                                            Name</button>
                                                    </th>
                                                    <th><button class="table-sort" data-sort="sort-score">Role</button>
                                                    </th>
                                                    <th><button class="table-sort" data-sort="sort-date">Partner</button>
                                                    </th>
                                                    <th><button class="table-sort"
                                                            data-sort="sort-quantity">Phone</button></th>
                                                    <th class="text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="w-100">
                                                <tr>
                                                    <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                            aria-label="Select invoice"></td>
                                                    <td class="sort-name">01</td>
                                                    <td class="sort-city">root</td>
                                                    <td class="sort-type">Nosmay Admin</td>
                                                    <td class="sort-score">Super User</td>
                                                    <td class="sort-date" data-date="1730273409">Any</td>
                                                    <td class="sort-quantity">0559530010</td>
                                                    <td class="text-end">
                                                        <span class="dropdown">
                                                            <button class="btn dropdown-toggle align-text-top"
                                                                data-bs-boundary="viewport" data-bs-toggle="dropdown"
                                                                aria-expanded="false"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
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
                                                                </svg> </button>
                                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                                                <a class="dropdown-item"  data-bs-toggle="modal"
                                                                data-bs-target="#modal-edit" aria-label="Add New">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-eye me-2">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                                        <path
                                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                                    </svg> View
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-circle-x me-2">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path
                                                                            d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                                        <path d="M10 10l4 4m0 -4l-4 4" />
                                                                    </svg> Disable User
                                                                </a>
                                                            </div>
                                                        </span>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center">
                                        <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of
                                            <span>16</span> entries
                                        </p>
                                        <ul class="pagination m-0 ms-auto">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-1">
                                                        <path d="M15 6l-6 6l6 6"></path>
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
                                                    next
                                                    <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-1">
                                                        <path d="M9 6l6 6l-6 6"></path>
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

            </div>

        </div>

        <!-- Add Modal -->
        <div class="modal modal-blur fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form>
                        <div class="modal-body">
                            <div class="col-12">
                                <div class="col-md-12">
                                    <div class="card-body  mx-4 justify-content-end">

                                        <div class="card card-body mb-3">

                                            <h3 class="card-title">Admin Portal Login</h3>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Portal Login</label>
                                                <div class="col">
                                                    <input type="email" class="form-control"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Enter portal login email/number">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Portal Password</label>
                                                <div class="col">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                    <small class="form-hint">
                                                        Password must be 8-20 characters long, contain letters
                                                        and numbers, and at least one spercial character for maximum
                                                        strength. Must not contain
                                                        spaces or emoji.
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Confirm Password</label>
                                                <div class="col">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-body mb-3">

                                            <h3 class="card-title">User Details</h3>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label required">Full Name</label>
                                                <div class="col">
                                                    <input type="email" class="form-control"
                                                        aria-describedby="emailHelp" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Sex</label>
                                                <div class="col">
                                                    <select class="form-select">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Email</label>
                                                <div class="col">
                                                    <input type="email" class="form-control"
                                                        aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Phone Number</label>
                                                <div class="col">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="emailHelp" placeholder="2335595***10">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label required">Role</label>
                                                <div class="col">
                                                    <select class="form-select">
                                                        <option>Super Administrator</option>
                                                        <option>Administrator</option>
                                                        <option>Sales Manager</option>
                                                        <option>Lead Agent</option>
                                                        <option>Agent</option>
                                                        <option>Logisitics Manager</option>
                                                        <option>Finance Manager</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Partner</label>
                                                <div class="col">
                                                    <select class="form-select">
                                                        <option>Any</option>
                                                        <option selected>Nosmay GH</option>
                                                        <option>Nosmay ZM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                                Cancel
                            </a>
                            <a href="#" class="btn btn-primary btn-5 ms-auto"  type="submit" data-bs-dismiss="modal">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                                Add
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
        <div class="modal modal-blur fade" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form>
                        <div class="modal-body">
                            <div class="col-12">
                                <div class="col-md-12">
                                    <div class="card-body  mx-4 justify-content-end">

                                        <div class="card card-body mb-3">

                                            <h3 class="card-title">Admin Portal Login</h3>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Portal Login</label>
                                                <div class="col">
                                                    <input type="email" class="form-control"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Enter portal login email/number">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Portal Password</label>
                                                <div class="col">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                    <small class="form-hint">
                                                        Password must be 8-20 characters long, contain letters
                                                        and numbers, and at least one spercial character for maximum
                                                        strength. Must not contain
                                                        spaces or emoji.
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Confirm Password</label>
                                                <div class="col">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-body mb-3">

                                            <h3 class="card-title">User Details</h3>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label required">Full Name</label>
                                                <div class="col">
                                                    <input type="email" class="form-control"
                                                        aria-describedby="emailHelp" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Sex</label>
                                                <div class="col">
                                                    <select class="form-select">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Email</label>
                                                <div class="col">
                                                    <input type="email" class="form-control"
                                                        aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Phone Number</label>
                                                <div class="col">
                                                    <input type="number" class="form-control"
                                                        aria-describedby="emailHelp" placeholder="2335595***10">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label required">Role</label>
                                                <div class="col">
                                                    <select class="form-select">
                                                        <option>Super Administrator</option>
                                                        <option>Administrator</option>
                                                        <option>Sales Manager</option>
                                                        <option>Lead Agent</option>
                                                        <option>Agent</option>
                                                        <option>Logisitics Manager</option>
                                                        <option>Finance Manager</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-3 col-form-label">Partner</label>
                                                <div class="col">
                                                    <select class="form-select">
                                                        <option>Any</option>
                                                        <option selected>Nosmay GH</option>
                                                        <option>Nosmay ZM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                                Cancel
                            </a>
                            <a href="#" class="btn btn-primary btn-5 ms-auto"  type="submit" data-bs-dismiss="modal">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                                Add
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Delete / Disable Modal -->
        <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" aria-hidden="true" style="display: none;">
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
                        <div class="text-secondary">Do you really want to Deactivate this SKU Discount?
                        </div>
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
                                        Deactivate
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
