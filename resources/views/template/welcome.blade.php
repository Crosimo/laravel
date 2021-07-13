<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partials/nav')
    <div class="container">
        <h1>Welcome {{env('APP_NAME')}}</h1>
        @include('partials/breadcrumb')
        @yield('content')
    </div>

    @include('partials/footer')
    <script regular src="{{asset('js/perso.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
