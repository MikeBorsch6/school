<!DOCTYPE html>
	<html>
	<head>
		<title> Create Minor</title>
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

		<h1>Create a Minor</h1>

		<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="miID">Minor ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="miID" name="miid" placeholder="Minor ID..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="mName">Minor Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="miName" name="minorname" placeholder="Minor Name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="deID">Department ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="deID" name="deid" placeholder="Department ID..">
    </div>
  </div>


  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>

</div>

</body>
</html>


