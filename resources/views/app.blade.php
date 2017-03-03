<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    <body>
        @section('sidebar')
            
        @show

        <div class="container">
            @if (Session::has('message'))
                <div class="flash alert-info">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @yield('content')
        </div>

        @yield('footer')
    </body>
</html>