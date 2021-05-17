<!DOCTYPE html>
<html>
<head>
    <title>Search Prequisites</title>
    <link rel="stylesheet" type="text/css" href="pagesU.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @php
            echo(file_get_contents(public_path('css/pagesU.css')))
        @endphp
    </style>
    <div id="grad2p">

    <ul>
        <div class="header">
            <img src='/images/saturn1.png' alt="logo" />
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


<h1 class="title1">Prerequisites</h1>
  <h2>All Courses</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="enter course ID">
<br></br>

<table class="prerequi">
  <thead>
  <tr>
    <th>&nbsp;</th>
    <th>Course ID</th>
    <th>Course Name</th>
    <th>Major</th>
    <th>Credits</th>
    <th>Minimum Grade</th>
  </tr>
  </thead>
  <tbody>
  @foreach(App\Models\Course::where('date','08/03/21-12/16/21')->get() as $course)
      <tr>
          <td><a href="/prerequiPage">Edit</a></td>
          <td>{{$course->crn}}</td>
          <td>{{$course->title}}</td>
          <td>{{$course->subject}}</td>
          <td>{{$course->credits}}</td>
          <td>C</td>
      </tr>
      @endforeach
  </tbody>

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
