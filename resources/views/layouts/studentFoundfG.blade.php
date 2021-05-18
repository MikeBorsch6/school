<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
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
          <a href="faculty" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">{{Auth::user()->name}}</button>
          <div class="dropdown-content">
          <a href="/MyInfoF">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>
</head>

<body>
  <h1 class="title1">Student</h1>
	<table class="courseHist">
  <thead>
  <tr>
    <th>&nbsp;</th>
    <th>Student ID</th>
    <th>Student Name</th>
    <th>Date of Birth</th>
    <th>Email Address</th>
    <th>Advisor</th>

  </tr>
</thead>
<tbody>
  <tr>
    <td><a href="/studentPageF">View</a></td>
    <td>827836098</td>
    <td>James Peng</td>
    <td>02/27/98</td>
    <td>jpeng@saturnuni.com</td>
    <td>Maria Romero Sorto</td>
  </tr>
</tbody>
</table>

</body>
</html>
