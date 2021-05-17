<!DOCTYPE html>
<html>
<head>
    <title> Create Course</title>
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
                        <a href="/MyInfoA">My Info</a>
                        <a href="/logout">Log out</a>

                    </div>
                </div>
            </div>

        </ul>
<body>

<h1>Create a Class</h1>

<div class="container">
    <form method="post" action="{{route('course.create')}}">
        @csrf

        <div class="row">
            <div class="col-25">
                         <label for="crn">CRN</label>
                    </div>
                    <div class="col-75">
                   <input type="text" id="crn" name="crn"  placeholder="crn">
                </div>
           </div>

        <div class="row">
            <div class="col-25">
                <label for="subject">Subject</label>
            </div>
            <div class="col-75">
                <input type="text" id="subject" name="subject"  placeholder="subject">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="course">Course Number</label>
            </div>
            <div class="col-75">
                <input type="text" id="course" name="course"  placeholder="course">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="section">Section</label>
            </div>
            <div class="col-75">
                <input type="text" id="section" name="section"  placeholder="section">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="campus_id">Campus ID</label>
            </div>
            <div class="col-75">
                <input type="text" id="campus_id" name="campus_id"  placeholder="campus_id">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="credits">Credits</label>
            </div>
            <div class="col-75">
                <input type="text" id="credits" name="credits"  placeholder="credits">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="title">Title</label>
            </div>
            <div class="col-75">
                <input type="text" id="title" name="title"  placeholder="title">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="days">Days</label>
            </div>
            <div class="col-75">
                <input type="text" id="days" name="days"  placeholder="days">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="time">Time</label>
            </div>
            <div class="col-75">
                <input type="text" id="time" name="time"  placeholder="time">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="capacity">Capacity</label>
            </div>
            <div class="col-75">
                <input type="text" id="capacity" name="capacity"  placeholder="capacity">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="section_actual">Section Actual</label>
            </div>
            <div class="col-75">
                <input type="text" id="section_actual" name="section_actual"  placeholder="section_actual">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="section_remaining">Section Remaining</label>
            </div>
            <div class="col-75">
                <input type="text" id="section_remaining" name="section_remaining"  placeholder="section_remaining">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="user_id">Professor ID</label>
            </div>
            <div class="col-75">
                <input type="text" id="user_id" name="user_id"  placeholder="user_id">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="date">Date</label>
            </div>
            <div class="col-75">
                <input type="text" id="date" name="date"  placeholder="date">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="location">Room ID</label>
            </div>
            <div class="col-75">
                <input type="text" id="location" name="location"  placeholder="location">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="field_id">Field ID</label>
            </div>
            <div class="col-75">
                <input type="text" id="field_id" name="field_id"  placeholder="field_id">
            </div>
        </div>

        <label> Field:
        <select style="width:616px; float:right" name="field_id">
            @foreach(App\Models\Field::all() as $field)
                <option value="{{$field->id}}">{{$field->name}}</option>
            @endforeach
        </select></label>

        <label> Course:
            <select style="width:616px; float:right" name="subject_id">
                @foreach(App\Models\Subject::all() as $field)
                    <option value="{{$field->id}}">{{$field->name}}</option>
                @endforeach
            </select></label>

        <label>Prereq CRN:     <input name="parent_id"> </label>



        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>

</div>

</body>
</html>
