@extends('layouts.auth')

@section('title', 'Create Password Sent')

@section('content')

    <body class=" d-flex flex-column">
        <script src="{{ asset('bank/js/demo-theme.min.js') }}"></script>
        <div class="page page-center">
            <div class="container container-tight py-4">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36"
                            alt=""></a>
                </div>
                <div class="text-center">
                    <div class="my-5">
                        <h2 class="h1">Check your inbox</h2>
                        <p class="fs-h3 text-muted">
                            We've sent you a magic link to <strong>{{$email}}</strong>.<br />
                            Please click the link to confirm your address.<br />
                            Email received! Please <a href="{{route('auth-signin')}}">sign in</a>.
                        </p>
                    </div>
                    <div class="text-center text-muted mt-3">
                        Can't see the email? Please check the spam folder.<br />
                        Wrong email? Please <a href="{{route('auth-forgot-pass')}}">re-enter your address</a>.
                    </div>
                </div>
            </div>
        </div>
        <!-- Libs JS -->
        <!-- Tabler Core -->
        <script src="{{ asset('bank/js/tabler.min.js') }}" defer></script>
        <script src="{{ asset('bank/js/demo.min.js') }}" defer></script>
    </body>

@endsection
