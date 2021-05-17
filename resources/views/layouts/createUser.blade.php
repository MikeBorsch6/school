<!DOCTYPE html>
	<html>
	<head>
		<title> Create User</title>
		<link rel="stylesheet" type="text/css" href="pagesU.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @php
                echo(file_get_contents(public_path('css/pagesU.css')))
            @endphp
        </style>
		<div id="grad1">

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
  	</div>

		</ul>
	<body>

		<h1>Create a User</h1>

		<div class="container">
  <form action="{{route('users.store')}}" method="post">
      @csrf
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="first name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="eaddress">Email Address</label>
    </div>
    <div class="col-75">
      <input type="text" id="eaddress" name="email_address" placeholder="email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pword">Password</label>
    </div>
    <div class="col-75">
      <input type="text" id="pword" name="password" placeholder="password..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="saddress">CompleteAddress</label>
    </div>
    <div class="col-75">
      <input type="text" id="saddress" name="street_address" placeholder="street address..">
    </div>
  </div>

{{--  <div class="row">--}}
{{--    <div class="col-25">--}}
{{--      <label for="pnumber">Phone Number</label>--}}
{{--    </div>--}}
{{--    <div class="col-75">--}}
{{--      <input type="text" id="pnumber" name="phonenumber" placeholder="phone number..">--}}
{{--    </div>--}}
{{--  </div>--}}

  <div class="row">
    <div class="col-25">
      <label for="utype">User Type</label>
    </div>
    <div class="col-75">
      <select id="utype" name="role_id">
      	 <option value="none">--Select--</option>
        <option value="3">Student</option>
        <option value="2">Faculty</option>
        <option value="1">Admin</option>
        <option value="10">Researcher</option>
        <option value="11">General</option>
      </select>
    </div>
  </div>

  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>

</div>

</body>
</html>


