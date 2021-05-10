<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="main.css">

<style>
    @php
        echo(file_get_contents(public_path('css/main.css')))
    @endphp
</style>
<header id = "main-header">
    <h1>Saturn University</h1>
    <h5>The Galaxy is the limit.</h5>
</header>
    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/catalog">Catalog</a></li>
        <li><a href="/masterschedule">Master Schedule</a></li>
        <li><a href="/selectCal">Academic Calendar</a></li>
        @if(Auth::user())
            <li class="right"><a href="/logout">Log Out</a></li>
            @else
            <li class="right"><a href="/login">Log in</a></li>
        @endif
    </ul>

</head>
<body>
    @yield('content')
</body>
    @yield('scripts')
<div class="copyrightSec">
    <p>Copyright Saturn University</p>
</div>
</html>
