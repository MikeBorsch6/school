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

	<h1 class="title1">Criminology</h1>
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
          <td>6</td>
          <td>Intro to Criminology	</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>2090</td>
          <td>6</td>
          <td>Juvenile Delinquency	</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>3092</td>
          <td>6</td>
          <td>Victimology		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>3093</td>
          <td>6</td>
          <td>Criminal Justice Admin		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>3094</td>
          <td>6</td>
          <td>Drugs and Society		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>3200</td>
          <td>6</td>
          <td>Crime, Media and Culture		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4000</td>
          <td>6</td>
          <td>Gender, Crime and Justice		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4091</td>
          <td>6</td>
          <td>Punishment & Corrections		</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4099</td>
          <td>6</td>
          <td>Sociology of Violence			</td>
          <td>4</td>
          <td>C</td>
      </tr>
      <tr>
          <td>4550</td>
          <td>6</td>
          <td>Theories of Crime			</td>
          <td>4</td>
          <td>C</td>
      </tr>

  </table>


	</body>
	</html>
