@extends('layouts.auth')

@section('title', 'Home')

@section('content')

    @php
        header('Refresh: 7; url=sign-in');
    @endphp

    <body class=" d-flex flex-column">
        <script src="{{ asset('bank/js/demo-theme.min.js') }}"></script>
        <div class="page page-center">
            <div class="container container-slim py-4">
              <div class="text-center">
                <div class="mb-3">
                  <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('bank/logo/logo.svg') }}" height="64" alt=""></a>
                </div>
                <div class="text-muted mb-3">Preparing application</div>
                <div class="progress progress-sm">
                  <div class="progress-bar progress-bar-indeterminate"></div>
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
