<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Favicons -->
    <link href="{{ asset('bank/logo/favicon.svg') }}" rel="icon">

    <title>@yield('title') - HostControl | Nosmay Enterprise Solutions
    </title>
    <!-- CSS files -->
    <link href="{{ asset('bank/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('bank/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('bank/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('bank/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('bank/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

@yield('content')

</html>
