<!DOCTYPE html>
<html>
<head>
    <title>Student Holds</title>
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
  <h2>700876427</h2>
  <h2>{{Auth::user()->name}}</h2>

  <ul>
    <li><strong><u>Hold</u></strong></li>
    <li><span id="stylediv">None</span></li> <!--change to default what the php page says-->
  </ul>
  <p>There are currently no holds on your account</p>

</body>
</div>
</html>
