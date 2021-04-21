<!DOCTYPE html
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

		<h1 class ="title1">Please select the department</h1>
<div class="container">
      <div class="center2">
        <div class="depart">
  		<button class="depart"><a href ="americanstudiesM1.blade.php">American Studies</a></button>
      <button class="depart"><a href ="bioSciM1.blade.php">Biological Sciences</a></button>
      <button class="depart"><a href ="businessM1.blade.php">Business</a></button>
      <button class="depart"><a href ="chemPhyM1.blade.php">Chemistry and Physics</a></button>
      <button class="depart"><a href ="comLearnM1.blade.php">Community Learning</a></button>
      <button class="depart"><a href ="compSciM1.blade.php">Computer Science</a></button>
      <button class="depart"><a href ="crimiM1.blade.php">Criminology</a></button>
      <button class="depart"><a href ="educaM1.blade.php">Education</a></button>
      <button class="depart"><a href ="englishM1.blade.php">English</a></button>
      <button class="depart"><a href ="firstYrM1.blade.php">First-Year Experience</a></button>
      <button class="depart"><a href ="genStudyM1.blade.php">General Studies</a></button>
      <button class="depart"><a href ="histPhilM1.blade.php">History and Philosophy</a></button>
      <button class="depart"><a href ="libStudyM1.blade.php">Liberal Studies</a></button>
      <button class="depart"><a href ="mathM1.blade.php">Mathematics</a></button>
      <button class="depart"><a href ="mentalM1.blade.php">Mental Health</a></button>
      <button class="depart"><a href ="modernLanM1.blade.php">Modern Languages</a></button>
      <button class="depart"><a href ="musicDM1.blade.php">Music and Dance</a></button>
      <button class="depart"><a href ="polEcoLawM1.blade.php">Politics, Economics, and Law</a></button>
      <button class="depart"><a href ="proStudyM1.blade.php">Professional Studies</a></button>
      <button class="depart"><a href ="psychM1.blade.php">Psychology</a></button>
      <button class="depart"><a href ="publicHealM1.blade.php">Public Health</a></button>
      <button class="depart"><a href ="socioM1.blade.php">Sociology</a></button>
      <button class="depart"><a href ="visualAM1.blade.php">Visual Arts</a></button>
      <button class="depart"><a href ="womenStudyM1.blade.php">Women's Studies</a></button>



		</div>
    </div>
</div>

	</body>
	</html>


