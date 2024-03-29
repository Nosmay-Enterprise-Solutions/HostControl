@extends('layouts.auth')

@section('title', 'Sign In')

@section('content')

<body class=" d-flex flex-column bg-white">
    <script src="{{ asset('bank/js/demo-theme.min.js') }}"></script>
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100"
                style="background-image: url({{ asset('bank/photos/cover-00.jpg') }})">
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('bank/logo/logo.svg') }}"
                            height="64" alt=""></a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Sign In
                </h2>
                <form method="post" autocomplete="off" novalidate>@csrf
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Your Email" name="email" value="{{ old('email') }}" required>
                        <input type="hidden" name="status" id="status" value="1">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Your Password" name="password">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password"
                                    data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path
                                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <span class="form-label-description mt-2 mb-3">
                            <a href="{{route('auth-forgot-pass')}}">I forgot password</a>
                        </span>
                    </div>
                    <div class="form-footer mt-4">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('bank/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('bank/js/demo.min.js') }}" defer></script>
</body>

@endsection
