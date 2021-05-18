<!DOCTYPE html>
<html>
<head>
    <title>Class Roster</title>
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
        </head>

        <h1 class="title1">Roster</h1>
        <table class="classinfo">
            <tr>
                <th>Course Name:</th>
                <td>Linear Algebra</td>
                <th>Faculty Name:</th>
                <td>Geta Tekanie</td>
                <th>Days:</th>
                <td>Mon, Wed</td>
            </tr>

            <tr>
                <th>CRN:</th>
                <td>36823</td>
                <th>Semester Year:</th>
                <td>Spring 2021</td>
                <th>Start Time:</th>
                <td>1:00pm</td>
            </tr>

            <tr>
                <th>Enrolled:</th>
                <td>20</td>
                <th>Capacity:</th>
                <td>25</td>
                <th>End Time:</th>
                <td>2:30pm</td>
            </tr>
        </table>



        <table class="roster">
            <thead>
            <tr>
                <th>&nbsp;</th>
                <th>ID Number</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
            </thead>
            <tbody>
            @foreach($course->users as $user)
                <tr>
                    <td><a href="/course/{{$user->id}}/{{$course->id}}">Remove</a></td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @if(isset($user->grades->firstWhere('course.course_id', $course->id)->grade))
                        <td>{{$user->grades->firstWhere('course.course_id', $course->id)->grade}}</td>
                    @else
                        <td>No Grade</td>
                    @endif


                </tr>
            @endforeach

            </tbody>
        </table>
        </body>
</html>
