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

	<h1 class="title1">General Studies</h1>
  <table class="tableCat">
  <tr>
    <th>CourseID</th>
    <th>Department ID</th>
    <th>Course Name</th>
    <th>Course Credit</th>
    <th>Minimum Grade</th>

  </tr>
  <tr>
    <td>5000</td>
    <td>20</td>
    <td>General Studies Capstone Course	</td>
    <td>4</td>
    <td>C</td>

</table>


	</body>
	</html>
