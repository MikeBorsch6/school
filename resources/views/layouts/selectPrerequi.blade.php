<!DOCTYPE html>
<html>
<head>
    <title>Search Prequisites</title>
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


<h1 class="title1">Prerequisites</h1>
<div>
  <h2>All Courses</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="enter course ID">
<br></br>
</div>

<table id="prerequi" class="prerequi">
  <thead>
  <tr>
    <th>&nbsp;</th>
    <th>Course ID</th>
    <th>Course Name</th>
    <th>Major</th>
    <th>Credits</th>
    <th>Departments</th>


  </tr>
</thead>
<tbody>
  <tr>
    <td><a href="/prerequiPage">Select</a></td>
    <td>127836</td>
    <td>Linear Algebra</td>
    <td>Mathemcatics, B.S.</td>
    <td>4</td>
    <td>Mathematics</td>
  </tr>

  <tr>
    <td><a href="/prerequiPage">Select</a></td>
    <td>12231</td>
    <td>Intro to Statistics</td>
    <td>Mathemcatics, B.S.</td>
    <td>4</td>
    <td>Mathematics</td>
  </tr>

  <tr>
    <td><a href="/prerequiPage">Select</a></td>
    <td>56733</td>
    <td>Computer Networks</td>
    <td>Computer Science, B.S.</td>
    <td>4</td>
    <td>Computer Science</td>
  </tr>

 <tr>
    <td><a href="/prerequiPage">Select</a></td>
    <td>45321</td>
    <td>Child Psychology</td>
    <td>Psychology, B.S.</td>
    <td>4</td>
    <td>Mental Health</td>
  </tr>
</tbody>
</table>

  <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("prerequi");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</div>
</html>
