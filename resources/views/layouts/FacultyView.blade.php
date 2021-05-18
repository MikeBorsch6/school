<!DOCTYPE html>
	<html>
	<head>
		<title>Faculty</title>
		<link rel="stylesheet" type="text/css" href="dashboard.css">
        <style>
            @php
                echo(file_get_contents(public_path('css/dashboard.css')))
            @endphp
        </style>


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

		</ul>

	</head>
	<body>

		<h1>Welcome, Faculty</h1>
		<div class ="div1">
			<button class="button"><img src='images/courses.png'><a href="/courseHistoryf"><p>Courses</p></a>
			</button>

			<button class="button button2">
				<img src='images/attend.png'><a href="/currentClassesf"><p>Attendance</p></a>
			</button>
			<button class="button button3">
				<img src='images/advisesc.png'><a href="/adviseesF"><p>Advisee</p></a>
			</button>
			<button class="button button4">
				<img src='images/findstu.png'><a href="/searchStudentFG"><p>Find Student</p></a>
			</button>
			<button class="button button5">
				<img src='images/grades.png'><a href="/searchStudentF"><p>Grades</p></a>
			</button>


			</div>
		</div>

			<div>
			<table id ="courses">
				<h2 class="titleS">Courses I am Teaching</h2>
				<tr>
					<td>sample course 1</td>

				</tr>
				<tr>
					<td>sample course 2</td>
				</tr>
				<tr>
					<td>sample course 3</td>
				</tr>
				<tr>
					<td>sample course 4</td>
				</tr>
				<tr>
					<td>sample course 5</td>
				</tr>
			</table>
		</div>
		<div>
			<table id ="advisorSched">
				<tr>
					<th>Advisor Schedule</th>
				</tr>
				<tr>
					<td>Student 1 - April 20- 10:30am</td>
				</tr>
				<tr>
					<td>Student 2 - April 23- 10:30am</td>
				</tr>

			</table>
			</div>


</body>

		<div>
    		<img class="marginauto" src='images/school.png' alt="centered image" />
		</div>


			<div class="copyrightSec">
				<p>Copyright Saturn University</p>
			</div>
</html>
