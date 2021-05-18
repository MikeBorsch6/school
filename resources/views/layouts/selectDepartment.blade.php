<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="stylesheet" type="text/css" href="pagesU.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @php
            echo(file_get_contents(public_path('css/pagesU.css')))
        @endphp
    </style>
    <div id="grad1">

    <ul>
      <div class="header">
          <a href="admin" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">{{Auth::user()->name}}</button>
          <div class="dropdown-content">
          <a href="/MyInfoA">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>

<body>


	<h1 class = "title1">Please select the department</h1>

      <div class="center2">
        <div class="depart">
  		<button class="depart"><a href ="/minmajPage">American Studies</a></button>
  		<button class="depart"><a href ="/minmajPage">Biological Sciences</a></button>
  		<button class="depart"><a href ="/minmajPage">Business</a></button>
  		<button class="depart"><a href ="/minmajPage">Chemistry and Physics</a></button>
  		<button class="depart"><a href ="/minmajPage">Community Learning</a></button>
  		<button class="depart"><a href ="/minmajPage">Computer Science</a></button>
      <button class="depart"><a href ="/minmajPage">Criminology</a></button>
      <button class="depart"><a href ="/minmajPage">Education</a></button>
      <button class="depart"><a href ="/minmajPage">English</a></button>
      <button class="depart"><a href ="/minmajPage">First-Year Experience</a></button>
      <button class="depart"><a href ="/minmajPage">General Studies</a></button>
      <button class="depart"><a href ="/minmajPage">History and Philosophy</a></button>
      <button class="depart"><a href ="/minmajPage">Liberal Studies</a></button>
      <button class="depart"><a href ="/minmajPage">Mathematics</a></button>
      <button class="depart"><a href ="/minmajPage">Mental Health</a></button>
      <button class="depart"><a href ="/minmajPage">Modern Languages</a></button>
      <button class="depart"><a href ="/minmajPage">Music and Dance</a></button>
      <button class="depart"><a href ="/minmajPage">Politics, Economics, and Law</a></button>
      <button class="depart"><a href ="/minmajPage">Professional Studies</a></button>
      <button class="depart"><a href ="/minmajPage">Psychology</a></button>
      <button class="depart"><a href ="/minmajPage">Public Health</a></button>
      <button class="depart"><a href ="/minmajPage">Sociology</a></button>
      <button class="depart"><a href ="/minmajPage">Visual Arts</a></button>
      <button class="depart"><a href ="/minmajPage">Women's Studies</a></button>



		</div>

</div>

</body>
</div>
</html>
