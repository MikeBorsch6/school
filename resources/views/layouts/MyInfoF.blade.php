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
    				<td><b>Faculty</b></td>
 				 </tr>
  				<tr>
    				<td><b>ID number</b></td>
    				<td>100283183</td>

  				</tr>
  				<tr>
    				<td><b>First Name</b></td>
    				<td>Maria</td>

 				 </tr>
  				<tr>
    				<td><b>Last Name</b></td>
    				<td>Romero</td>

  				</tr>
  				<tr>
    				<td><b>Email</b></td>
    				<td>romeroms@saturnuni.com</td>

  				</tr>
 				 <tr>
    				<td><b>Date of Birth</b></td>
    				<td>12/19/1989</td>

  				</tr>
  				<tr>
    				<td><b>Street Address</b></td>
    				<td>12 Ocean Dr</td>

  				</tr>
  				<tr>
    				<td><b>City</b></td>
    				<td>Montauk</td>

  				</tr>
  				<tr>
    				<td><b>State</b></td>
    				<td>NY</td>

  				</tr>
  				<tr>
    				<td><b>Zip Code</b></td>
    				<td>11934</td>

  				</tr>
  				<tr>
    				<td><b>Advisees</b></td>
    				<td>James Peng</td>

  				</tr>
  				<tr>
    				<td><b>Advisees Email</b></td>
    				<td>jpeng1@saturnuni.com</td>

  				</tr>
          <tr>
            <td><b>Advisees</b></td>
            <td>Kim Kamado</td>

          </tr>
          <tr>
            <td><b>Advisees Email</b></td>
            <td>kkamado@saturnuni.com</td>

          </tr>



			</table>
		</div>



	</body>
	</html>


