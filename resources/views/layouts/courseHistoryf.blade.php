<!DOCTYPE html>
<html>
<head>
    <title>Course History</title>
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
          <a href="/MyInfoF">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>

<body>
  <h1 class="title1">Courses Taught in the Past</h1>

  <table class="courseHist">
  <thead>
  <tr>
    <th>&nbsp;</th>
    <th>CRN</th>
    <th>Course Name</th>
    <th>Course ID</th>
    <th>Section</th>
    <th>Room Number</th>
    <th>Date</th>
    <th>Days</th>
    <th>Time</th>
    <th>Capacity</th>

  </tr>
</thead>
<tbody>
    @foreach(Auth::user()->teaches as $course)
  <tr>
    <td><a href="/viewClassInfo">View</a></td>
    <td>{{$course->crn}}</td>
    <td>{{$course->title}}</td>
    <td>{{$course->subject}}</td>
    <td>{{$course->section}}</td>
    <td>{{$course->location}}</td>
    <td>{{$course->date}}</td>
    <td>{{$course->days}}</td>
    <td>{{$course->time}}</td>
    <td>{{$course->capacity}}</td>
  </tr>
    @endforeach
</tbody>
</table>


</body>
</div>
</html>

