<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- FontAwesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- View defined styles -->
    @stack('styles')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {!! \Edofre\FullcalendarScheduler\FullcalendarScheduler::renderScriptFiles() !!}
</head>
<body>
<div id="app">
    @include('layouts._nav')

    <main class="py-4">
        <div class="container">
            @include('flash::message')
        </div>

        <div class="container">
            @yield('content')
        </div>
    </main>
</div>

<script type="text/javascript">
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
<!-- Custom scripts -->
@stack('scripts')

</body>
</html>
