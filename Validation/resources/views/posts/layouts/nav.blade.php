<html>
    <head>
        <title> @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <!-- @section('sidebar')
            This is the master sidebar.
        @show -->

    <div class="container">


        @yield('content')

        <!-- @section('sidebar')
            This is the master sidebar.
        @show -->
    </div>
    </body>
</html>
