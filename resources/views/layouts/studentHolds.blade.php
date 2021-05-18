<!DOCTYPE html>
<html>
<head>
    <title>Student Holds</title>
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
<body>
<h2>{{$user->id}}</h2>
<h2>{{$user->name}}</h2>

<ul>
    <li><strong><u>Hold</u></strong></li>
    @foreach($user->holds as $hold)
        <li><span id="stylediv">{{$hold->name}}</span></li>
    @endforeach
</ul>

<div>
    <form method="post" action="{{route('student.holds.post',['user' => $user->id])}}">
    @csrf
    <label for="holdSelect">Add a hold:</label>
    <select name='hold' id="holdSelect" onchange="styleselect()">
        <option default value="">Select Hold</option>
        @foreach(App\Models\Hold::all() as $hold)
            <option value="{{$hold->id}}">{{$hold->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Submit">
</form>
</div>


</body>
</div>
</html>
