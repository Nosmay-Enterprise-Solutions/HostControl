@extends('layouts.admin')

@section('domain', 'Administration')

@section('title', 'Admin Roles')

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
                                                    <th><button class="table-sort" data-sort="sort-city">Role
                                                            Name</button>
                                                    </th>
                                                    <th><button class="table-sort" data-sort="sort-date">Partner</button>
                                                    </th>

                                                    <th><button class="table-sort" data-sort="sort-date">Type</button>
                                                    </th>
                                                    <th class="text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="w-100">
                                                <tr>
                                                    <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                            aria-label="Select invoice"></td>
                                                    <td class="sort-city">Super Administrator</td>
                                                    <td class="sort-date" data-date="1730273409">Any</td>
                                                    <td class="sort-date" data-date="1730273409">System</td>

                                                    <td class="text-end">
                                                        <div class="d-flex justify-content-end gap-2">
                                                            <!-- View Action -->
                                                            <a href="" class="text-primary me-1" title="View"
                                                                data-bs-toggle="modal" data-bs-target="#modal-edit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
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

                                                            <!-- Change Permissions -->
                                                            <a href="" class="text-primary me-1"
                                                                title="Change Permission" data-bs-toggle="modal"
                                                                data-bs-target="#modal-permissions">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-lock-bolt">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path
                                                                        d="M13.5 21h-6.5a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 1.74 1.012" />
                                                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                                                    <path d="M19 16l-2 3h4l-2 3" />
                                                                </svg>
                                                            </a>

                                                            <!-- Delete Action -->
                                                            <a href="#" class="text-danger me-1"
                                                                data-bs-toggle="modal" data-bs-target="#modal-danger"
                                                                title="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
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
                                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    {{-- <td class="text-end">
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
                                                                <a class="dropdown-item" data-bs-toggle="modal"
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
                                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#modal-permissions"
                                                                    aria-label="Add New">
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
                                                                    </svg> Edit Permissions
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
                                                                    </svg> Delete Role
                                                                </a>
                                                            </div>
                                                        </span>
                                                    </td> --}}
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
                        <h5 class="modal-title">Add New Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form>
                        <div class="modal-body">
                            <div class="row justify-content-center my-5">


                                <div class="row col-10">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label">Full Name</label>
                                            <div class="col">
                                                <input type="email" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label">Permission Scheme</label>
                                            <div class="col">
                                                <select class="form-select">
                                                    <option>Super Administrator</option>
                                                    <option>Sales Manager</option>
                                                </select>
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
                            <a href="#" class="btn btn-primary btn-5 ms-auto" type="submit"
                                data-bs-dismiss="modal">
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
                        <h5 class="modal-title">Edit Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form>
                        <div class="modal-body">
                            <div class="row justify-content-center my-5">


                                <div class="row col-10">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label">Full Name</label>
                                            <div class="col">
                                                <input type="email" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-3 col-form-label" disabled>Permission Scheme</label>
                                            <div class="col">
                                                <select class="form-select" disabled>
                                                    <option>Super Administrator</option>
                                                    <option>Sales Manager</option>
                                                </select>
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
                            <a href="#" class="btn btn-primary btn-5 ms-auto" type="submit"
                                data-bs-dismiss="modal">
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

        {{-- modal for EDIT PERMISSIONS --}}
        <div class="modal modal-blur fade" id="modal-permissions" tabindex="-1" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Role Permissions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="nav nav-pills flex-column" id="module-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="customers-tab" data-bs-toggle="pill"
                                            href="#customers-content" role="tab" aria-controls="admin-content"
                                            aria-selected="true"><span class="fw-bold">Customers</span></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="master-tab" data-bs-toggle="pill"
                                            href="#tickets-content" role="tab" aria-controls="tickets-content"
                                            aria-selected="false"><span class="fw-bold">Tickets</span></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="discounts-tab" data-bs-toggle="pill"
                                            href="#discounts-content" role="tab" aria-controls="discounts-content"
                                            aria-selected="false"><span class="fw-bold">Discounts</span></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="reports-tab" data-bs-toggle="pill"
                                            href="#reports-content" role="tab" aria-controls="reports-content"
                                            aria-selected="false"><span class="fw-bold">Finance</span></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="admin-tab" data-bs-toggle="pill" href="#admin-content"
                                            role="tab" aria-controls="admin-content" aria-selected="true"><span
                                                class="fw-bold">Inventory</span></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tools-tab" data-bs-toggle="pill" href="#tools-content"
                                            role="tab" aria-controls="tools-content" aria-selected="false"><span
                                                class="fw-bold">Logistics</span></a>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tools-tab" data-bs-toggle="pill" href="#tools-content"
                                            role="tab" aria-controls="tools-content" aria-selected="false"><span
                                                class="fw-bold">Admin</span></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tools-tab" data-bs-toggle="pill" href="#tools-content"
                                            role="tab" aria-controls="tools-content" aria-selected="false"><span
                                                class="fw-bold">Config</span></a>
                                    </li>
                                </ul>
                            </div>

                            {{-- TAB CONTENT HERE --}}
                            <div class="col-md-8">
                                <div class="tab-content" id="module-tab-content">

                                    <!-- Customers Tab Content -->
                                    <div class="tab-pane fade show scrollable-card active" id="customers-content"
                                        role="tabpanel" aria-labelledby="customers-tab"
                                        style="max-height: 60vh; overflow-y: auto;">

                                        <!-- Example of a Simple Feature Without Submenus -->
                                        <div class="toggle-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Add</span>
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input main-toggle" type="checkbox">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Customer List Permissions -->
                                        <div class="toggle-section" id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">List</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submenus (optional) -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">View</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Edit</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Table Export</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Billing Permissions -->
                                        <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Billing</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Transactions Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Transactions</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>View</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Edit</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Delete</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Export Table</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Invoices Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Invoices</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>List</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>View</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Send</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Delete</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Payments Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Payments</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>List</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Receive Cash</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Receive DigiPay</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Delete</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Invoices Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Activity Logs</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>History</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Communication</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Communication Permissions -->
                                        <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Communication</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Communication Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Send messages</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Delete Messages</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!--  Tickets Content -->
                                    <div class="tab-pane fade scrollable-card" id="tickets-content" role="tabpanel"
                                        aria-labelledby="tickets-tab" style="max-height: 60vh; overflow-y: auto;">


                                        <!-- Example of a Simple Feature Without Submenus -->
                                        <div class="toggle-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Dashboard</span>
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input main-toggle" type="checkbox">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Example of a Simple Feature Without Submenus -->
                                        <div class="toggle-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Create Ticket</span>
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input main-toggle" type="checkbox">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Full Ticket list Permissions -->
                                        <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">List</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tickets Submenus Permissions-->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Close ticket</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Assign ticket</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Mark as unread</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Mark as read</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">View ticket</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Move to archive</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Delete message in ticket
                                                        </span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Edit message in tickets
                                                        </span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Ticket Notes Permissions -->
                                        <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Notes</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Communication Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Create/View/Edit/Delete own notes</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">View other admin notes</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Edit other admin notes</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Delete other admin notes</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Discounts Tab Content -->
                                    <div class="tab-pane fade scrollable-card" id="discounts-content" role="tabpanel"
                                        aria-labelledby="discounts-tab" style="max-height: 60vh; overflow-y: auto;">

                                        <!-- Discount Groups Permissions -->
                                        <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Discount Groups</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Discount Groups  Sub Toggles Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Add Discount Group</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">List</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>View</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Edit</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Delete</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Export Table</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Coupons Permissions -->
                                        <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Coupons</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Coupons  Sub Toggles Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Add Coupon</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">List</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>View</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Edit</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Delete</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Export Table</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <!-- Credit Limits Permissions -->
                                         <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Credit Limits</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Credit Limit  Sub Toggles Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Add Credit Limit</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">List</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>View</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Edit</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Delete</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Export Table</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <!-- Credit Limits Permissions -->
                                         <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">SKU Discounts</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Credit Limit  Sub Toggles Submenus -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Add SKU Discounts</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">List</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>View</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Edit</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Delete</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Export Table</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Finance Tab Content -->
                                    <div class="tab-pane fade scrollable-card" id="reports-content" role="tabpanel"
                                        aria-labelledby="reports-tab" style="max-height: 60vh; overflow-y: auto;">
                                        <div class="toggle-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Dashboard</span>
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input main-toggle" type="checkbox">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="toggle-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Transactions</span>
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input main-toggle" type="checkbox">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="toggle-section" id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Invoices</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submenus (optional) -->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">List</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Edit</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Export Table </span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Cash Reconciliation Tab Content -->
                                        <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Cash Reconciliation</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary" style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tickets Submenus Permissions-->
                                            <div class="sub-toggles mb-5 ms-3" style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">List</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Generate Deposit Slip</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Receive Payment</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="">Export Table</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Deposit Slip Tab Content -->
                                        <div class="toggle-section " id="billing-section">
                                            <div class="border-bottom py-2 me-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Deposit Slips</span>
                                                    <div class="gap-3 d-flex">
                                                        <!-- Select All as a clickable link -->
                                                        <span class="select-all-billing text-primary"
                                                            style="cursor: pointer; text-decoration: underline;">
                                                            Full Access
                                                        </span>

                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submenus -->
                                            <div class="sub-toggles ms-3"  style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">List</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>View</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Edit</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Export Table</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Approvals Submenus -->
                                            <div class="sub-toggles ms-3"  style="display: none;">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Approvals</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input sub-main-toggle"
                                                                type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="secondlevel-sub-toggles mb-5" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Individual options -->
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Approve Deposit Slip</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Inventory Tab Content -->
                                    <div class="tab-pane fade scrollable-card" id="tools-content" role="tabpanel"
                                        aria-labelledby="tools-tab" style="max-height: 60vh; overflow-y: auto;">
                                        <div class="toggle-section" id="tools-toggles">
                                            <div class="toggle-section" id="tools-toggles">
                                                <div class="border-bottom py-2 me-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Overall Tools Data</span>
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input main-toggle" type="checkbox">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="sub-toggles mt-2" style="display: none;">
                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <span>Select All</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle-select-all"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Access</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Read</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Write</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Delete</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Export</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom py-2 me-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span>Import</span>
                                                            <label class="form-check form-check-single form-switch">
                                                                <input class="form-check-input sub-toggle"
                                                                    type="checkbox">
                                                            </label>
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

                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                            Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete / Disable Modal -->
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

    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     document.querySelectorAll(".toggle-section").forEach(section => {
        //         const mainToggle = section.querySelector(".main-toggle");
        //         const subTogglesContainer = section.querySelector(".sub-toggles");
        //         const selectAllToggle = section.querySelector(".sub-toggle-select-all");
        //         const subToggles = section.querySelectorAll(".sub-toggle");

        //         // When a main toggle is clicked
        //         mainToggle.addEventListener("change", function() {
        //             if (this.checked) {
        //                 subTogglesContainer.style.display = "block";
        //                 selectAllToggle.checked = false;
        //                 subToggles.forEach(toggle => toggle.checked = false);
        //             } else {
        //                 subTogglesContainer.style.display = "none";
        //             }
        //         });

        //         // When "Select All" is toggled
        //         selectAllToggle.addEventListener("change", function() {
        //             const isChecked = this.checked;
        //             subToggles.forEach(toggle => toggle.checked = isChecked);
        //         });

        //         // When any sub-toggle is manually toggled
        //         subToggles.forEach(toggle => {
        //             toggle.addEventListener("change", function() {
        //                 const allChecked = [...subToggles].every(t => t.checked);
        //                 selectAllToggle.checked = allChecked;
        //             });
        //         });
        //     });
        // });
        //         document.addEventListener("DOMContentLoaded", function () {
        //     document.querySelectorAll(".toggle-section").forEach(billingSection => {
        //         const billingToggle = billingSection.querySelector(".main-toggle");
        //         const subToggles = billingSection.querySelector(".sub-toggles");
        //         const selectAllBilling = billingSection.querySelector(".select-all-billing");

        //         // Handle Billing Toggle
        //         billingToggle.addEventListener("change", function () {
        //             if (this.checked) {
        //                 subToggles.style.display = "block";
        //             } else {
        //                 subToggles.style.display = "none";
        //                 subToggles.querySelectorAll(".main-toggle, .sub-toggle, .sub-toggle-select-all").forEach(input => {
        //                     input.checked = false;
        //                 });
        //                 subToggles.querySelectorAll(".secondlevel-sub-toggles").forEach(section => {
        //                     section.style.display = "none";
        //                 });
        //             }
        //         });

        //         // Handle "Select All" for Billing (Turns Everything ON)
        //         selectAllBilling.addEventListener("click", function () {
        //             billingToggle.checked = true;
        //             billingToggle.dispatchEvent(new Event("change")); // Trigger subToggles to show

        //             // Turn on all checkboxes under Billing
        //             subToggles.querySelectorAll("input[type='checkbox']").forEach(input => {
        //                 input.checked = true;
        //             });

        //             subToggles.style.display = "block";
        //             subToggles.querySelectorAll(".secondlevel-sub-toggles").forEach(section => {
        //                 section.style.display = "block";
        //             });
        //         });

        //         // Handle Sub-toggle (Transactions) click
        //         subToggles.querySelectorAll(".main-toggle").forEach(subToggle => {
        //             subToggle.addEventListener("change", function () {
        //                 const secondLevelSubToggles = this.closest(".border-bottom").nextElementSibling;
        //                 if (secondLevelSubToggles && secondLevelSubToggles.classList.contains("secondlevel-sub-toggles")) {
        //                     secondLevelSubToggles.style.display = this.checked ? "block" : "none";
        //                     secondLevelSubToggles.querySelectorAll(".sub-toggle").forEach(input => {
        //                         input.checked = false;
        //                     });
        //                 }
        //             });
        //         });

        //         // Handle "Select All" in second-level sub-toggles
        //         billingSection.querySelectorAll(".sub-toggle-select-all").forEach(selectAll => {
        //             selectAll.addEventListener("change", function () {
        //                 const subToggleGroup = this.closest(".secondlevel-sub-toggles");
        //                 const allSubToggles = subToggleGroup.querySelectorAll(".sub-toggle");

        //                 allSubToggles.forEach(input => {
        //                     input.checked = this.checked;
        //                 });
        //             });
        //         });
        //     });
        // });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".toggle-section").forEach(section => {
                const mainToggle = section.querySelector(".main-toggle");
                const subToggles = section.querySelector(".sub-toggles");
                const selectAll = section.querySelector(".select-all-billing"); // May not exist

                // Toggle submenus when the main toggle is clicked
                if (subToggles) {
                    mainToggle.addEventListener("change", function() {
                        subToggles.style.display = this.checked ? "block" : "none";

                        // Uncheck all sub-toggles when turning off
                        if (!this.checked) {
                            subToggles.querySelectorAll("input[type='checkbox']").forEach(input => {
                                input.checked = false;
                            });

                            // Also hide secondlevel-sub-toggles
                            subToggles.querySelectorAll(".secondlevel-sub-toggles").forEach(sub => {
                                sub.style.display = "none";
                            });
                        }
                    });
                }

                // "Select All" for Billing - Only if present
                if (selectAll) {
                    selectAll.addEventListener("click", function() {
                        mainToggle.checked = true;
                        mainToggle.dispatchEvent(new Event("change")); // Ensures submenu opens

                        // Check all checkboxes
                        if (subToggles) {
                            subToggles.querySelectorAll("input[type='checkbox']").forEach(input => {
                                input.checked = true;
                            });

                            // Show all secondlevel-sub-toggles
                            subToggles.querySelectorAll(".secondlevel-sub-toggles").forEach(sub => {
                                sub.style.display = "block";
                            });
                        }
                    });
                }

                // Handle individual sub-main toggles
                section.querySelectorAll(".sub-main-toggle").forEach(subToggle => {
                    subToggle.addEventListener("change", function() {
                        const secondLevelSubToggles = this.closest(".border-bottom")
                            .nextElementSibling;
                        if (secondLevelSubToggles && secondLevelSubToggles.classList
                            .contains("secondlevel-sub-toggles")) {
                            secondLevelSubToggles.style.display = this.checked ? "block" :
                                "none";

                            // Uncheck second-level toggles when turning off
                            if (!this.checked) {
                                secondLevelSubToggles.querySelectorAll(".sub-toggle")
                                    .forEach(input => {
                                        input.checked = false;
                                    });
                            }
                        }
                    });
                });

                // Handle "Select All" inside second-level submenus
                section.querySelectorAll(".sub-toggle-select-all").forEach(selectAll => {
                    selectAll.addEventListener("change", function() {
                        const subToggleGroup = this.closest(".secondlevel-sub-toggles");
                        if (subToggleGroup) {
                            subToggleGroup.querySelectorAll(".sub-toggle").forEach(
                                input => {
                                    input.checked = this.checked;
                                });
                        }
                    });
                });

                // FIX: Show secondlevel-sub-toggles when a sub-toggle is checked
                section.querySelectorAll(".sub-toggle").forEach(subToggle => {
                    subToggle.addEventListener("change", function() {
                        const secondLevelSubToggles = this.closest(".border-bottom")
                            .nextElementSibling;
                        if (secondLevelSubToggles && secondLevelSubToggles.classList
                            .contains("secondlevel-sub-toggles")) {
                            secondLevelSubToggles.style.display = this.checked ? "block" :
                                "none";

                            // Uncheck everything inside if turning off
                            if (!this.checked) {
                                secondLevelSubToggles.querySelectorAll(".sub-toggle")
                                    .forEach(input => {
                                        input.checked = false;
                                    });
                            }
                        }
                    });
                });
            });
        });
    </script>


@endsection
