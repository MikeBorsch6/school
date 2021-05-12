<!DOCTYPE html>
	<html>
	<head>
		<title>Reasearcher</title>
		<link rel="stylesheet" type="text/css" href="dashboard.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @php
                echo(file_get_contents(public_path('css/dashboard.css')))
            @endphp
        </style>


		<ul>
			<div class="header">
			<img src='images/saturn1.png' alt="logo" />
  			<div class="dropdown" style="float:right;">
  				<button class="dropbtn">{{Auth::user()->name}}</button>
  				<div class="dropdown-content">
  				<a href="/MyInfoR">My Info</a>
  				<a href="/LogOut">Log out</a>

  			</div>
  		</div>

		</ul>

	</head>
	<body>

		<h1>Welcome, Researcher</h1>
		<div class ="div1">
			<button class="button"><img src='images/departmentsR.png'><a href="departmentStats"><p>Departments</p></a>
			</button>

			<button class="button button2">
				<img src='images/classesR.png'><a href="/classStats"><p>Classes</p></a>
			</button>
			<button class="button button3">
				<img src='images/gradesR.png'><a href="/gradesStats"><p>Grades</p></a>
			</button>

			</div>
		</div>




</body>

		<div>
    		<img class="marginauto" src='images/school.png' alt="centered image" />
		</div>


			<div class="copyrightSec">
				<p>Copyright Saturn University</p>
			</div>
</html>
