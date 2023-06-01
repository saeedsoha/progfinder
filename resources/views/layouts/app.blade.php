<!-- In your main layout file, e.g., resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <title>Job Platform</title>
</head>



<body>

    
    
    <div class="container">
        @yield('content')
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>



</body>

</html>