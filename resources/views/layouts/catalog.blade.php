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
        <li class="right"><a href="Login.html">Log in</a></li>
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
    <div class="center2">
        <div class="depart">
            <button class="depart"><a href ="americanstudies.blade.php">American Studies</a></button>
            <button class="depart"><a href ="bioSci.blade.php">Biological Sciences</a></button>
            <button class="depart"><a href ="business.blade.php">Business</a></button>
            <button class="depart"><a href ="chemPhy.blade.php">Chemistry and Physics</a></button>
            <button class="depart"><a href ="comLearn.blade.php">Community Learning</a></button>
            <button class="depart"><a href ="compSci.blade.php">Computer Science</a></button>
            <button class="depart"><a href ="crimi.blade.php">Criminology</a></button>
            <button class="depart"><a href ="educa.blade.php">Education</a></button>
            <button class="depart"><a href ="english.blade.php">English</a></button>
            <button class="depart"><a href ="firstYr.blade.php">First-Year Experience</a></button>
            <button class="depart"><a href ="genStudy.blade.php">General Studies</a></button>
            <button class="depart"><a href ="histPhil.blade.php">History and Philosophy</a></button>
            <button class="depart"><a href ="libStudy.blade.php">Liberal Studies</a></button>
            <button class="depart"><a href ="mathC.blade.php">Mathematics</a></button>
            <button class="depart"><a href ="mental.blade.php">Mental Health</a></button>
            <button class="depart"><a href ="modernLan.blade.php">Modern Languages</a></button>
            <button class="depart"><a href ="musicD.blade.php">Music and Dance</a></button>
            <button class="depart"><a href ="polEcoLaw.blade.php">Politics, Economics, and Law</a></button>
            <button class="depart"><a href ="proStudy.blade.php">Professional Studies</a></button>
            <button class="depart"><a href ="psych.blade.php">Psychology</a></button>
            <button class="depart"><a href ="publicHeal.blade.php">Public Health</a></button>
            <button class="depart"><a href ="socio.blade.php">Sociology</a></button>
            <button class="depart"><a href ="visualA.blade.php">Visual Arts</a></button>
            <button class="depart"><a href ="womenStudy.blade.php">Women's Studies</a></button>

        </div>
    </div>

</div>

</body>
</html>
