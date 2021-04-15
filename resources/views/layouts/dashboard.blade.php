<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

</head>
<style>
    @php
        echo(file_get_contents(public_path('css/main.css')))
    @endphp
</style>
<header id = "main-header">
    <h1>Saturn University</h1>
    <h5>The Galaxy is the limit.</h5>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="catalog.html">Catalog</a></li>
        <li><a href="masterschedule.html">Master Schedule</a></li>
        <li><a href="academicC.html">Academic Calendar</a></li>
        <li class="right"><a href="Login.html">Log in</a></li>
    </ul>

</header>
<body>
    @yield('content')
</body>
    @yield('scripts')
<div class="copyrightSec">
    <p>Copyright Saturn University</p>
</div>
</html>
