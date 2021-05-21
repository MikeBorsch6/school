<!DOCTYPE html>
<html>
<head>
    <title>Student Transcript</title>
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
  <h2>Transcript</h2>


  <div class="div1leftT">
    <table class="transcriptUser">

        <tr>
            <th>ID Number:</th>
            <td>{{Auth::user()->id}}</td>
        </tr>

        <tr>
            <th>Student Name:</th>
            <td>{{Auth::user()->name}}</td>
        </tr>

        <tr>
            <th>Major: </th>
            @if(Auth::user()->majors->isEmpty())
                <td>NA</td>
            @else
                @foreach(Auth::user()->majors as $major)
                    <td>{{$major->name }}</td>
                @endforeach
            @endif

        </tr>

        <tr>
            <th>Minor: </th>
            @if(Auth::user()->minors->isEmpty())
                <td>NA</td>
            @else
                @foreach(Auth::user()->minors as $minor)

                    <td>{{$minor->name }}</td>
                @endforeach
            @endif
        </tr>

        <tr>
            <th>GPA:   </th>
                <td>{{Auth::user()->gpa()}}</td>
        </tr>

    </table>

  </div>


  <div class="div1mainT">
    <table class="transcriptMain">
      <thead>
      <tr>
        <th>CRN</th>
        <th>Semester/Year</th>
        <th>Course Name</th>
        <th>Credits</th>
        <th>Grade</th>
        </tr>
</thead>
    <tbody>
    @foreach(Auth::user()->grades as $grade)
        <tr>
            <td>{{$grade->course->course->crn}}</td>
            <td>{{$grade->course->course->date}}</td>
            <td>{{$grade->course->course->title}}</td>
            <td>{{$grade->course->course->credits}}</td>
            @if(in_array(Auth::user()->role->id, [1,2]))
                <td><a href="{{route('enterGrade', ['grade' => $grade])}}">{{Auth::user()->calculateLetterGrades($grade)}}</a></td>
            @else
                <td>{{Auth::user()->calculateLetterGrades($grade)}}</a></td>
            @endif
        </tr>
    @endforeach

</tbody>
    </table>
  </div>
</body>
</div>
</html>
