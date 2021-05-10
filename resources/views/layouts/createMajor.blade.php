<!DOCTYPE html>
	<html>
	<head>
		<title> Create Major</title>
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

		<h1>Create a Major</h1>

		<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="mID">Major ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="mID" name="mid" placeholder="Major ID..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="mName">Major Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="mName" name="majorname" placeholder="Major Name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="dID">Department ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="dID" name="did" placeholder="Department ID..">
    </div>
  </div>


  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>

</div>

</body>
</html>


