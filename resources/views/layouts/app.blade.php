<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('','NO/WEAR') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Shadows+Into+Light&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link href="http://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
</head>

<body>
  @include('inc.navbar')
      
        @yield('bg')
        <main class="py-4">
            @if(Session::has('error'))
                <div class="d-flex w-100 justify-content-center" style="background: none; margin:0%;">
                    <div class="alert alert-danger w-50 text-center">
                        {{Session::get('error')}}
                    </div>
                </div>
            @endif

            @if(Session::has('success'))
            <div class="d-flex w-100 justify-content-center" style="background: none; margin:0%;">
                <div class="alert alert-success w-50 text-center">
                    {{Session::get('success')}}
                </div>
            </div>
        @endif
            
            @yield('content')
        </main>
    
    

</body>
</html>
