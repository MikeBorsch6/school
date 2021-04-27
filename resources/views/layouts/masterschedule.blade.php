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
    <li class="right"><a href="/login">Log in</a></li>
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
        <button class="btn-group"><a href="/masterschedule/selDepMaF21">Fall 2021</button>
        <button class="btn-group"><a href="/masterschedule/selDepMaS21">Spring 2021</button>
        <button class="btn-group"><a href="/masterschedule/selDepMaF20">Fall 2020</a></button>
        <button class="btn-group"><a href="/masterschedule/selDepMaS20">Spring 2020</a></button>
        <button class="btn-group"><a href="/masterschedule/selDepMaF19">Fall 2019</a></button>
        <button class="btn-group"><a href="/masterschedule/selDepMaS19">Spring 2019</a></button>
        <button class="btn-group"><a href="/masterschedule/selDepMaF18">Fall 2018</a></button>
        <button class="btn-group"><a href="/masterschedule/selDepMaS18">Spring 2018</a></button>
        <button class="btn-group"><a href="/masterschedule/selDepMaF17">Fall 2017</a></button>
    </div>
</div>


</body>
</html>
