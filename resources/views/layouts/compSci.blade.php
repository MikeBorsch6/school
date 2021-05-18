<!DOCTYPE html>
	<html>
	<head>
		  <title>Catalog</title>
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
  			<li class="right"><a href="Login.blade.php">Log in</a></li>
		</ul>

  </head>

    <style>
        @php
            echo(file_get_contents(public_path('css/main.css')))
        @endphp
    </style>

<body>
<h1 class="title1">Computer Science</h1>
<table class="tableCat">
  <tr>
    <th>CourseID</th>
    <th>Department ID</th>
    <th>Course Name</th>
    <th>Course Credit</th>
    <th>Minimum Grade</th>

  </tr>
  <tr>
    <td>1500</td>
    <td>1</td>
    <td>Intro to Computer Applications</td>
    <td>4</td>
    <td>C</td>
  </tr>
    <tr>
        <td>2510</td>
        <td>1</td>
        <td>Computer Programming 1</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>2511</td>
        <td>1</td>
        <td>Computer Programming 2</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3611</td>
        <td>1</td>
        <td>Advanced C#</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3620</td>
        <td>1</td>
        <td>Computer Architecture I</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3810</td>
        <td>1</td>
        <td>Data Structures & Algorithms</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>3911</td>
        <td>1</td>
        <td>C++in Object Oriented Design</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4100</td>
        <td>1</td>
        <td>Technical Communications</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4200</td>
        <td>1</td>
        <td>Mobile Programming via Android</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4501</td>
        <td>1</td>
        <td>Software Engineering</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4550</td>
        <td>1</td>
        <td>Database Management Systems</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>4720</td>
        <td>1</td>
        <td>Internet & Web Tech</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5710</td>
        <td>1</td>
        <td>Computer Networks</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5810</td>
        <td>1</td>
        <td>Data Mining</td>
        <td>4</td>
        <td>C</td>
    </tr>
    <tr>
        <td>5910</td>
        <td>1</td>
        <td>Systems Design & Implement</td>
        <td>4</td>
        <td>C</td>
    </tr>
</table>


	</body>
	</html>
