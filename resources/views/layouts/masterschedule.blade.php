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

        <a href="/selDepMaF21" class="buttonM"><img src='images/academ.png'>Fall 2021</a>
        <a href="/selDepMaS21" class="buttonM"><img src='images/academ.png'>Spring 2021</a>
        <a href="/selDepMaF20" class="buttonM"><img src='images/academ.png'>Fall 2020</a>
        <a href="/selDepMaS20" class="buttonM"><img src='images/academ.png'>Spring 2020</a>
        <a href="/selDepMaF19" class="buttonM"><img src='images/academ.png'>Fall 2019</a>
        <a href="/selDepMaS19" class="buttonM"><img src='images/academ.png'>Spring 2019</a>
        <a href="/selDepMaF18" class="buttonM"><img src='images/academ.png'>Fall 2018</a>
        <a href="/selDepMaS18" class="buttonM"><img src='images/academ.png'>Spring 2018</a>
        <a href="/selDepMaF17" class="buttonM"><img src='images/academ.png'>Fall 2017</a>
    </div>
</div>


</body>
</html>
