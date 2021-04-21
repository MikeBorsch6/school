<!DOCTYPE html>
<html>
<head>
    <title>Semesters</title>
    <link rel="stylesheet" type="text/css" href="main.css">

</head>



<body>
<header id = "main-header">

    <h1>Saturn University</h1>
    <h5>The Galaxy is the limit.</h5>

</header>

<ul>
    <li><a href="/home">Home</a></li>
    <li><a href="/catalog">Catalog</a></li>
    <li><a href="/masterschedule">Master Schedule</a></li>
    <li><a href="/selectCal">Academic Calendar</a></li>
    <li class="right"><a href="Login.html">Log in</a></li>
</ul>

</body>

</head>

<style>
    @php
        echo(file_get_contents(public_path('css/main.css')))
    @endphp
</style>

<body>

<h1 class="title1">Master Schedule</h1>

<div class="btn-group">
    <div class="center">
        <button class="btn-group"><a href="/selDepMaF21">Fall 2021</button>
        <button class="btn-group"><a href="/selDepMaS21">Spring 2021</button>
    </div>
</div>


</body>
</html>
