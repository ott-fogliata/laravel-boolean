<html>

<head>
    <title>Boolean Laravel - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>

    <header>
        <div class="container">
            <h1><a href="{{ route('public.auto.index') }}">Concessionario Boolean</a></h1>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
