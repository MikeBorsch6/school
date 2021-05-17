<!DOCTYPE html>
<html>
<head>
    <title>Class Roster</title>
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
      <img src='images/saturn1.png' alt="logo" />
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

    <h1>Please select a Semester</h1>

    <a href="/searchClassRosterF21" class="semestR"><img src='images/semestR.png'><p>Fall 2021</p></a>
    <a href="/searchClassRosterS21" class="semestR"><img src='images/semestR.png'><p>Spring 2021</p></a>



      </div>

  </body>

  </html>
