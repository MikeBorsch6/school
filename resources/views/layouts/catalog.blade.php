<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="stylesheet" type="text/css" href="main.css">


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

</head>

<style>
    @php
        echo(file_get_contents(public_path('css/main.css')))
    @endphp
</style>

<body>

<h1 class="title1">Please select the department</h1>
<div class="container">
    <div>
        <div class="depart">
            <button class="depart"><a href ="/departments/americanstudies">American Studies</a></button>
            <button class="depart"><a href ="/departments/bioscience">Biological Sciences</a></button>
            <button class="depart"><a href ="/departments/business">Business</a></button>
            <button class="depart"><a href ="/departments/chemphy">Chemistry and Physics</a></button>
            <button class="depart"><a href ="/departments/comlearning">Community Learning</a></button>
            <button class="depart"><a href ="/departments/compscience">Computer Science</a></button>
            <button class="depart"><a href ="/departments/criminology">Criminology</a></button>
            <button class="depart"><a href ="/departments/education">Education</a></button>
            <button class="depart"><a href ="/departments/english">English</a></button>
            <button class="depart"><a href ="/departments/firstyear">First-Year Experience</a></button>
            <button class="depart"><a href ="/departments/genstudy">General Studies</a></button>
            <button class="depart"><a href ="/departments/histphil">History and Philosophy</a></button>
            <button class="depart"><a href ="/departments/libstudy">Liberal Studies</a></button>
            <button class="depart"><a href ="/departments/math">Mathematics</a></button>
            <button class="depart"><a href ="/departments/mental">Mental Health</a></button>
            <button class="depart"><a href ="/departments/modernlan">Modern Languages</a></button>
            <button class="depart"><a href ="/departments/musicd">Music and Dance</a></button>
            <button class="depart"><a href ="/departments/polecolaw">Politics, Economics, and Law</a></button>
            <button class="depart"><a href ="/departments/prostudy">Professional Studies</a></button>
            <button class="depart"><a href ="/departments/psychology">Psychology</a></button>
            <button class="depart"><a href ="/departments/publichealth">Public Health</a></button>
            <button class="depart"><a href ="/departments/sociology">Sociology</a></button>
            <button class="depart"><a href ="/departments/visualarts">Visual Arts</a></button>
            <button class="depart"><a href ="/departments/womenstudies">Women's Studies</a></button>
        </div>
    </div>

</div>

</body>
</html>
