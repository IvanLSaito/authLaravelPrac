<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tasques</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <a class="navbar-brand" href="{{ url('tasques/') }}">Tasques</a>
        <a class="navbar-brand" href="{{ url('tasques/create') }}">Crea tasca</a>
    </nav>
    <br>
    <br>
    <div class="container">
        <div class="page-header">
            @yield('header')
        </div>

        @yield('content')

        <footer class="footer">
            @yield('footer')
            <p>&copy; 2018 Saito And Dani Company, Inc</p>
        </footer>
    </div>
</body>
</html>