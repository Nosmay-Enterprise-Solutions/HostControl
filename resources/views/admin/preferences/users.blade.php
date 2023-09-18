@extends('layouts.admin')

@section('title', 'Users')

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Pereferences
                    </div>
                    <h2 class="page-title">
                        Users
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                            data-bs-target="#modal-add-user">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Create New User
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
                        <div class="card-header">
                            <h3 class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                </svg> | Users
                            </h3>
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
                                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox">
                                        </th>
                                        <th>Name & Email</th>
                                        <th>Gender</th>
                                        <th>Contact</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Email Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $users)
                                        <tr>
                                            <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                    aria-label="Select invoice"></td>
                                            <td>
                                                <div class="d-flex py-1 align-items-center">
                                                    @if (empty($users->avatar))
                                                        <span class="avatar me-2"
                                                            style="background-image: url({{ asset('bank/avatar/default.jpg') }})"></span>
                                                    @else
                                                        <span class="avatar me-2"
                                                            style="background-image: url({{ asset($users->avatar) }})"></span>
                                                    @endif
                                                    <div class="flex-fill">
                                                        <div class="font-weight-medium">{{ $users->fname }}
                                                            {{ $users->sname }}</div>
                                                        <div class="text-muted"><a href="#"
                                                                class="text-reset">{{ $users->email }}</a></div>
                                                    </div>
                                                </div>
                                            <td>
                                                @if ($users->gender == 'm')
                                                    Male
                                                @else
                                                    Female
                                                @endif
                                            </td>
                                            <td>{{ $users->contact }}</td>
                                            <td>
                                                Administrator
                                            </td>
                                            <td>
                                                @if ($users->status == 1)
                                                    <span class="badge badge-outline text-green">Active</span>
                                                @elseif ($users->status == 0)
                                                    <span class="badge badge-outline text-red">Disabled</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (is_null($users->email_veirfied_at))
                                                    <span class="badge badge-outline text-orange">Not Verified</span>
                                                @else
                                                    <span class="badge badge-outline text-green">Verified</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <span class="dropdown">
                                                    <button class="btn dropdown-toggle align-text-top"
                                                        data-bs-boundary="viewport"
                                                        data-bs-toggle="dropdown">Actions</button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-eye me-3" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                                <path
                                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                                                </path>
                                                            </svg> View
                                                        </a>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
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

        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-add-user" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="{{route('admin-pr-new-user')}}" method="post">@csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create System User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">SurName</label>
                                    <input type="text" class="form-control" name="lname" required>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Other Names</label>
                                    <input type="text" class="form-control" name="fname" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select class="form-select" name="gender" required>
                                        <option value="null" disabled selected>Select Gender</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" required>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Contact</label>
                                    <input type="text" class="form-control" name="contact" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status" required>
                                        <option value="null" disabled selected>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label class="form-label">User Role</label>
                        <div class="form-selectgroup-boxes row mb-3">
                            <div class="col-lg-4">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="role" value="super_admin"
                                        class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Super Administrator</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="role" value="admin"
                                        class="form-selectgroup-input" checked>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Administrator</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="role" value="c_care"
                                        class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Help Desk</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-0">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-success ms-auto">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M14 4l0 4l-6 0l0 -4"></path>
                             </svg>
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
