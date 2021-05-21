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
    <div id="grad1">

    <ul>
      <div class="header">
          <a href="admin" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
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


<h1 class="title1">Prerequisites for:</h1>

<div class="divP1">
  <h2 class ="title2">{{$course->course}} {{$course->title}}</h2></div>
<div>
<table id="prerequi" class="prerequi">
  <thead>
  <tr>
    <th>Course</th>
    <th>Course Name</th>
    <th>Major</th>
    <th>Credits</th>
  </tr>

</thead>
<tbody>
  <tr>
    <td>{{$course->course }}</td>
    <td>{{$course->title}}</td>
    <td>{{$course->subject}}</td>
    <td>4</td>
  </tr>
</tbody>
</table>
<br>
<br>

</div>


<div class="divP2">
  <br>
<h3 class="title3"><br>The courses below are required:</br></h3></div>
<table id="prerequi" class="prerequi">
  <thead>
  <tr>
    <th>Course ID</th>
    <th>Course Name</th>
    <th>Major</th>
    <th>Credits</th>
  </tr>
</thead>

<tbody>
  @foreach($parents as $parent)
      <tr>
          <td>{{$parent->course}}</td>
          <td>{{$parent->title}}</td>
          <td>{{$parent->subject}}</td>
          <td>4</td>
      </tr>
  @endforeach
</tbody>
</div>

</table>
</body>
</div>
</html>

