<!DOCTYPE html>
<html>
<head>
    <title>Advisees</title>
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
  <h1 class="title1">Faculty Advisees</h1>
  <table class="adviseeL">
      <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Class</th>
        <th>&nbsp;</th>
        </tr>
</thead>

    <tbody>
    <tr>
    <td>700392123</td>
    <td>James Peng</td>
    <td>Senior</td>
    <td><a href="/studentPageA">View</a></td>
  </tr>


    <tr>
    <td>700392123</td>
    <td>James Peng</td>
    <td>Senior</td>
    <td><a href="/studentPageA">View</a></td>
  </tr>

    <tr>
    <td>700392123</td>
    <td>James Peng</td>
    <td>Senior</td>
    <td><a href="/studentPageA">View</a></td>

  </tr>

</tbody>
</table>

</body>
</div>
</html>
