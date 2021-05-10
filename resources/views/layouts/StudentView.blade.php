<!DOCTYPE html>
	<html>
	<head>
		<title>Student</title>
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
  				<a href="/MyInfoS">My Info</a>
  				<a href="/LogOut">Log out</a>

  			</div>
  		</div>
            </div>
            </ul>

	</head>
	<body>

		<h1>Welcome, Student</h1>
		<div class ="div1">
			<button class="button"><img src='images/register.png'><a href="/registerPage"><p>Register</p></a>
			</button>

			<button class="button button2">
				<img src='images/holds.png'><a href="/myHolds"><p>Holds</p></a>
			</button>
			<button class="button button3">
				<img src='images/degreea.png'><a href="/myDegreeEval"><p>Degree Audit</p></a>
			</button>
			<button class="button button4">
				<img src='images/transcript.png'><a href="/studentTranscript"><p>Transcript</p></a>
			</button>
			<button class="button button5">
				<img src='images/forms.png'><a href="/myForms"><p>Forms</p></a>
			</button>


			</div>
		</div>

		<div>
			<table id ="courses">
                <h2>Course I Am Taking</h2>
				@foreach(Auth::user()->courses as $course)
                    <tr>
                        <td>
                            {{ $course->crn }}
                        </td>
                        <td>
                            {{ $course->title }}
                        </td>
                        <td>
                            {{ $course->days }}
                        </td>
                        <td>
                            {{ $course->time }}
                        </td>
                        <td>
                            {{ $course->location }}
                        </td>
                    </tr>
                @endforeach
			</table>
		</div>

		<div>
            <br>
			<table id ="advisorSched">
				<tr>
					<th>Advisor Appointment</th>
				</tr>
				<tr>
					<td>Student 1 - April 20- 10:30am</td>
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
