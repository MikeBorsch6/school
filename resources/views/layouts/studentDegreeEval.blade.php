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

      <tr>
        <th>Course Name</th>
        <th>CRN</th>
        <th>Credits</th>
        <th>Grade</th>
        <th>Completed</th>
      </tr>

      </thead>
      <tbody>
      <tr>
        <td>Composition I</td>
        <td>1234</td>
        <td>4</td>
        <td>A+</td>
        <td>Fall 2017</td>
      </tr>

       <tr>
        <td>Composition II</td>
        <td>2345</td>
        <td>4</td>
        <td>A</td>
        <td>Spring 2018</td>
      </tr>

      <tr>
        <td>Programming I</td>
        <td>5642</td>
        <td>4</td>
        <td>A</td>
        <td>Spring 2018</td>
      </tr>

      <tr>
        <td>Programming II</td>
        <td>5678</td>
        <td>4</td>
        <td>A</td>
        <td>Fall 2018</td>
      </tr>

      <tr>
        <td>Data Structures</td>
        <td>5785</td>
        <td>4</td>
        <td>B+</td>
        <td>Spring 2019</td>
      </tr>

       <tr>
        <td>Computer Networks</td>
        <td>5697</td>
        <td>4</td>
        <td>A</td>
        <td>Spring 2019</td>
      </tr>

      <tr>
        <td>Database Management</td>
        <td>5789</td>
        <td>4</td>
        <td>B</td>
        <td>Fall 2020</td>
      </tr>


      <tr>
        <td>System Design</td>
        <td>5909</td>
        <td>4</td>
        <td></td>
        <td></td>
      </tr>
      </tbody>
      </table>

   </div>




</body>

</div>
</html>
