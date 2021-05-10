<!DOCTYPE html>
	<html>
	<head>
		<title>My Info</title>
		<link rel="stylesheet" type="text/css" href="info.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @php
                echo(file_get_contents(public_path('css/info.css')))
            @endphp
        </style>


		<ul>
			<div class="header">
			<img src='images/saturn1.png' alt="logo" />
  			<div class="dropdown" style="float:right;">
  				<button class="dropbtn">{{Auth::user()->name}}</button>
  				<div class="dropdown-content">
  				<a href="/MyInfo">My Info</a>
  				<a href="/LogOut">Log out</a>

  			</div>
  		</div>
  	</div>

		</ul>


	</head>
	<body>
		<h1>My Info</h1>

		<div class ="div2">
			<table>
  				<tr>
    				<th>Saturn University</th>

  				</tr>
  				<tr>
    				<td><img src='images/profile.png' style = "width:60px;height:60px;"></td>
    				<td><b>Student</b></td>
 				 </tr>
  				<tr>
    				<td><b>ID number</b></td>
    				<td>800086431</td>

  				</tr>
  				<tr>
    				<td><b>First Name</b></td>
    				<td>James</td>

 				 </tr>
  				<tr>
    				<td><b>Last Name</b></td>
    				<td>Peng</td>

  				</tr>
  				<tr>
    				<td><b>Email</b></td>
    				<td>Jpeng1@saturnuni.com</td>

  				</tr>
 				 <tr>
    				<td><b>Date of Birth</b></td>
    				<td>09/12/1998</td>

  				</tr>
  				<tr>
    				<td><b>Street Address</b></td>
    				<td>67 Sampled St</td>
  				</tr>
  				<tr>
    				<td><b>Advisor</b></td>
    				<td>Maria Romero Sorto</td>

  				</tr>
  				<tr>
    				<td><b>Advisor Email</b></td>
    				<td>romeroms@saturnuni.com</td>

  				</tr>

			</table>
		</div>



	</body>
	</html>


