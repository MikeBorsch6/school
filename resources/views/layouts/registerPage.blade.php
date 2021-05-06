<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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

  <h1 class="title 1">Registration</h1>
  <div class="divMaster">
    <a href="/selDepMaF21" class="buttMaster"><img src='images/semestR.png' target="_blank"><p>Fall 2021</p></a>
    <a href="/selDepMaS21" class="buttMaster"><img src='images/semestR.png' target="popup" onclick="window.open('selDepMaS21.html','name','width=700,height=500')"><p>Spring 2021</p></a>

  </div>

  <hr class="rounded">

    <table class="registered">
      <thead>
        <tr>
          <th>Status</th>
          <th>CRN</th>
          <th>Course Name</th>
          <th>Course ID</th>
          <th>Section</th>
          <th>Credits</th>
          <th>Enrollment Date</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>**Registered**</td>
          <td>7231</td>
          <td>Intro to Chemistry</td>
          <td>36284</td>
          <td>002</td>
          <td>2</td>
          <td>04/21/21</td>

        </tr>

        <tr>
          <td>**Registered**</td>
          <td>7231</td>
          <td>Intro to Chemistry</td>
          <td>36284</td>
          <td>002</td>
          <td>2</td>
          <td>04/21/21</td>

        </tr>

        <tr>
          <td>**Registered**</td>
          <td>7231</td>
          <td>Intro to Chemistry</td>
          <td>36284</td>
          <td>002</td>
          <td>2</td>
          <td>04/21/21</td>

        </tr>
      </tbody>
    </table>

<hr class="rounded">

<form class="register" action="/action_page.php" method="get">
  <label for="CRN">Register Class</label>
  <input type="text" id="CRN" name="CRN" value="">
  <input type="submit" value="Submit" class = "btnAdd">
</form>

<form class="drop" action="/action_page.php" method="get">
  <label for="crn2">Drop Class</label>
  <input type="text" id="crn2" name="crn2" value="">
  <input type="submit" value="Submit" class = "btnDrop">
</form>







  </body>
  </div>
  </html>
