<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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
          <a href="student" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">{{Auth::user()->name}}</button>
          <div class="dropdown-content">
          <a href="/MyInfoS">My Info</a>
          <a href="/logout">Log out</a>

        </div>
      </div>
    </div>

    </ul>
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
        </tr>
      </thead>

      <tbody>
      @foreach(Auth::user()->courses as $course)
          <tr>
              <td>
                  {{ $course->crn }}
              </td>
              <td>
                  {{ $course->title }}
              </td>
              <td>
                  {{ $course->days }}
              </td>
              <td>
                  {{ $course->time }}
              </td>
              <td>
                  {{ $course->location }}
              </td>
          </tr>
      @endforeach
      </tbody>
    </table>

<hr class="rounded">

  <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('user-course')}}">
      @csrf
      <div class="form-group">
          <label for="crn2">Register Class</label>
          <br>
          <input type="text" id="CRN" name="CRN" placeholder="CRN NUMBER" value="">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    <br>
  <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('user-course-delete')}}">
      @csrf
      <div class="form-group">
          <label for="crn2">Drop Class</label>
          <br>
          <input type="text" id="CRN" name="CRN" placeholder="CRN NUMBER" value="">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
  </html>
