@extends('layouts.admin')

@section('title', 'Configuration')

@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Configuration /
                        </div>
                        <h2 class="page-title">
                            Configuration
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">

                            <span class="d-sm-inline">
                                <div class="mb-3">
                                </div>
                            </span>
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

                        <!-- System Menu -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="">
                                            <h3 class="heading">System</h3>
                                            <div class="badges-list my-3">
                                                <div class="custom-link col-sm-6 col-md-2 ">
                                                    <a href="{{ route('admin.configuration.modules') }}" title="Modules">
                                                        <span class="button-title"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                                            </svg> Modules</span>
                                                    </a>
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

@endsection
