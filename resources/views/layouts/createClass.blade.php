<!DOCTYPE html>
	<html>
	<head>
		<title> Create Class</title>
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
  				<a href="/LogOut">Log out</a>

  			</div>
  		</div>
  	</div>

		</ul>
	<body>

		<h1>Create a Class</h1>

		<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="CRN">CRN</label>
    </div>
    <div class="col-75">
      <input type="text" id="CRN" name="crn" placeholder="CRN..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="cName">Course Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="cName" name="classname" placeholder="Class Name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="CourseID">Course ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="cID" name="courseID" placeholder="course ID..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="ftname">Faculty Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="ftname" name="facultyname" placeholder="Faculty Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="sec">Section</label>
    </div>
    <div class="col-75">
      <input type="text" id="sec" name="section" placeholder="section..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="rNumber">Room Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="rNumber" name="roomnumber" placeholder="room number..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="sYear">Semester Year</label>
    </div>
    <div class="col-75">
      <input type="text" id="sYear" name="semesteryear" placeholder="semester year..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="days">Days</label>
    </div>
    <div class="col-75">
      <input type="text" id="days" name="daysT" placeholder="days..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="timeSlot">Time</label>
    </div>
    <div class="col-75">
      <input type="text" id="timeSlot" name="timeS" placeholder="times..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="cP">Capacity</label>
    </div>
    <div class="col-75">
      <input type="text" id="cP" name="capacity" placeholder="capacity..">
    </div>
  </div>



  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>

</div>

</body>
</html>


