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
<h2>Transcript</h2>

<div class="div1leftT">
    <table class="transcriptUser">

        <tr>
            <th>ID Number:</th>
            <td>{{$user->id}}</td>
        </tr>

        <tr>
            <th>Student Name:</th>
            <td>{{$user->name}}</td>
        </tr>

        <tr>
            <th>Major: </th>
            @if($user->majors->isEmpty())
                <td>NA</td>
            @else
                @foreach($user->majors as $major)
                @endforeach
            @endif

        </tr>

        <tr>
            <th>Minor: </th>
            @if($user->minors->isEmpty())
                <td>NA</td>
            @else
                @foreach($user->minors as $minor)
                    <td>{{ $minor->name }}</td>
                @endforeach
            @endif
        </tr>

        <tr>
            <th>GPA:   </th>
            @if($user->grades->isEmpty())
                <td>NA</td>
            @else
                <td>{{$user->gpa()}}</td>
            @endif
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
            <th>&nbsp;Grade</th>
        </tr>
        </thead>

        <tbody>
        @foreach($user->grades as $grade)
            <tr>
                <td>{{$grade->course->course->crn}}</td>
                <td>{{$grade->course->course->date}}</td>
                <td>{{$grade->course->course->title}}</td>
                <td>{{$grade->course->course->credits}}</td>
                <td><a href="{{route('enterGrade', ['grade' => $grade])}}">{{$grade->grade}}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</div>
</html>
