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
			<img src='/images/saturn1.png' alt="logo" />
  			<div class="dropdown" style="float:right;">
  				<button class="dropbtn">{{Auth::user()->name}}</button>
  				<div class="dropdown-content">
  				<a href="MyInfoR.blade.php">My Info</a>
  				<a href="/logout">Log out</a>

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
                    <td><b>Admin</b></td>
                </tr>
                <tr>
                    <td><b>ID number</b></td>
                    <td>{{Auth::user()->id}}</td>

                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td>{{Auth::user()->name}}</td>

                </tr>

                <tr>
                    <td><b>Email</b></td>
                    <td>{{Auth::user()->email}}</td>

                </tr>

                <tr>
                    <td><b>Address</b></td>
                    <td>{{Auth::user()->address}}</td>

                </tr>



			</table>
		</div>



	</body>
	</html>


