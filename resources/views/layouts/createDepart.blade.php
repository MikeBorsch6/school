<!DOCTYPE html>
	<html>
	<head>
		<title> Create Department</title>
		<link rel="stylesheet" type="text/css" href="pagesU.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<div id="grad1">

		<ul>
			<div class="header">
			<img src='images/saturn1.png' alt="logo" />
			<div class="dropdown" style="float:right;">
  				<button class="dropbtn">Michael Borsch</button>
  				<div class="dropdown-content">
  				<a href="/MyInfoA">My Info</a>
  				<a href="/LogOut">Log out</a>

  			</div>
  		</div>
  	</div>

		</ul>


	</div>
	<body>

		<h1>Create a Department</h1>

		<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="dID">Department ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="dID" name="did" placeholder="Department ID..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="dName">Department Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="dName" name="departmentN" placeholder="Department Name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="cName">Chair Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="cName" name="cname" placeholder="Chair Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="contactN">Faculty Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="contactN" name="contactNumb" placeholder="Contact Number..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="emailA">Email Address</label>
    </div>
    <div class="col-75">
      <input type="text" id="emailA" name="emailAddress" placeholder="Email Address..">
    </div>
  </div>




  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>

</div>

</body>
</html>


