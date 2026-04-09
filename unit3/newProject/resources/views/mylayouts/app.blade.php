<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        This is my header
    </header>
    <img src="{{asset('images/1.svg')}}">
    @yield('childdata')

    <footer>
        <p>@2026 all rights reserved</p>
    </footer>

</body>
</html>