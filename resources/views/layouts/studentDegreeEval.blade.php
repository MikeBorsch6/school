<!DOCTYPE html>
<html>
<head>
    <title>Student Degree Evaluation</title>
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
  <div><button onclick="window.print()">Print this page</button></div>
 <h2>Degree Evaluation</h2>

  <div class="divDU">
    <table class="degreeUser">
      <tr>
        <th>Name:</th>
        <td>{{$user->name}}</td>
        <th>Class Level:</th>
        <td>{{$user->role->name}}</td>
        <th>Major:</th>
          @if($user->majors->isEmpty())
              <td>NA</td>
          @else
              @foreach($user->majors as $major)
                  <td>{{$major->name}}</td>
              @endforeach
          @endif
      </tr>

      <tr>
        <th>ID Number:</th>
        <td>{{$user->id}}</td>
        <th>College:</th>
        <td>Saturn University</td>
        <th>Minor:</th>
          @if($user->minors->isEmpty())
              <td>NA</td>
          @else()
              @foreach($user->minors as $minor)
                  <td>{{$minor->name}}</td>
              @endforeach
          @endif
      </tr>

      <tr>
        <th>GPA:</th>
        <td>{{$user->gpa()}}</td>
        <th>Credits:</th>
        <td>{{ $user->grades->count() * 4 }}</td>
        <th>Credits Required:</th>
        <td>120</td>
      </tr>
    </table>

  </div>

  <div class="divDE">
    <h3>Undergraduate</h3>
    <table class="degreeEval">
      <thead>
      <tr>
        <th>Major Requirements</th>
        <th></th>
        <th></th>
        <th></th>
        <th>Semester/Year</th>
      </tr>
      @foreach($user->degreeEval() as $course)
          <tr>
              <td>{{$course->title}}</td>
              <td>{{$course->course}}</td>
              <td>4</td>
              @if(isset($course->grade))
                  <td>{{$course->grade}}</td>
              @else
                  <td>NA</td>
              @endif
              <td>{{$course->date}}</td>
          </tr>
        @endforeach
      </tbody>
      </table>

   </div>




</body>

</div>
</html>
