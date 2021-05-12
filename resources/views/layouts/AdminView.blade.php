<!DOCTYPE html>
	<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="dashboard.css">
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
  				<a href="/MyInfoA">My Info</a>
  				<a href="/logout">Log out</a>

  			</div>
  		</div>

    </ul>
        </head>
	<body>

		<h1>Welcome, Admin</h1>
		<div class ="div1">
			<button class="button"><img src='images/users.png'><a href="/usersPage"><p>Users</p></a>
			</button>

			<button class="button button2">
				<img src='images/coursesAd.png'><a href="/coursePage"><p>Courses</p></a>
			</button>
			<button class="button button3">
				<img src='images/gradesA.png'><a href="/searchStudentG"><p>Grades</p></a>
			</button>
			<button class="button button4">
				<img src='images/holdsA.png'><a href="/Holds"><p>Holds</p></a>
			</button>
			<button class="button button5">
				<img src='images/resetPass.png'><a href="/searchUserP"><p>Reset Password</p></a>
			</button>


			</div>
			<div class ="div2">

<p><a href="/classPage">Classes</a></p>
<p><a href="/selectPrerequi">Prerequistes</a></p>
<p><a href="/selectDepartment">Major/Minor</a></p>

</div>

<div class = "div3">

<p><a href="/departments">Departments</a></p>
<p><a href="/selectSemestRost">Rosters</a></p>
<p><a href="/lockedAccounts">Locked Accounts</a></p>
			</div>



</body>

		<div>
    		<img class="marginauto" src='images/school.png' alt="centered image" />
		</div>


			<div class="copyrightSec">
				<p>Copyright Saturn University</p>
			</div>
</html>
