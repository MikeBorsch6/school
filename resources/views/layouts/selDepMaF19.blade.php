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

<h1 class = "title1" >Please select the department</h1>
<div class="container">
    <div>
        <div class="depart">
            <button class="depart"><a href ="/departments/americanstudiesM">American Studies</a></button>
            <button class="depart"><a href ="/departments/bioscienceM">Biological Sciences</a></button>
            <button class="depart"><a href ="/departments/businessM">Business</a></button>
            <button class="depart"><a href ="/departments/chemphyM">Chemistry and Physics</a></button>
            <button class="depart"><a href ="/departments/comlearningM">Community Learning</a></button>
            <button class="depart"><a href ="/departments/compscienceM">Computer Science</a></button>
            <button class="depart"><a href ="/departments/criminologyM">Criminology</a></button>
            <button class="depart"><a href ="/departments/educationM">Education</a></button>
            <button class="depart"><a href ="/departments/englishM">English</a></button>
            <button class="depart"><a href ="/departments/firstyearM">First-Year Experience</a></button>
            <button class="depart"><a href ="/departments/genstudyM">General Studies</a></button>
            <button class="depart"><a href ="/departments/histphilM">History and Philosophy</a></button>
            <button class="depart"><a href ="/departments/libstudyM">Liberal Studies</a></button>
            <button class="depart"><a href ="/departments/mathM">Mathematics</a></button>
            <button class="depart"><a href ="/departments/mentalM">Mental Health</a></button>
            <button class="depart"><a href ="/departments/modernlanM">Modern Languages</a></button>
            <button class="depart"><a href ="/departments/musicdM">Music and Dance</a></button>
            <button class="depart"><a href ="/departments/polecolawM">Politics, Economics, and Law</a></button>
            <button class="depart"><a href ="/departments/prostudyM">Professional Studies</a></button>
            <button class="depart"><a href ="/departments/psychologyM">Psychology</a></button>
            <button class="depart"><a href ="/departments/publichealthM">Public Health</a></button>
            <button class="depart"><a href ="/departments/sociologyM">Sociology</a></button>
            <button class="depart"><a href ="/departments/visualartsM">Visual Arts</a></button>
            <button class="depart"><a href ="/departments/womenstudiesM">Women's Studies</a></button>

        </div>
    </div>
</div>

</body>
</html>


