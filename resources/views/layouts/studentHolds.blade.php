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
                <img src='images/saturn1.png' alt="logo" />
                <div class="dropdown" style="float:right;">
                    <button class="dropbtn">{{Auth::user()->name}}</button>
                    <div class="dropdown-content">
                        <a href="/MyInfoA">My Info</a>
                        <a href="/LogOut">Log out</a>

                    </div>
                </div>
            </div>

        </ul>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            function styleselect() {
                var value = $('#holdSelect').val();
                var div = $("#stylediv");

                if (value == "4") {
                    div.html('<b>Health</b>');
                }
                if (value == "3") {
                    div.html('<b>Finance</b>');
                }
                if (value == "2") {
                    div.html('<b>Academic</b>');
                }
                if (value == "1") {
                    div.html('<b>select</b>');
                }
            }
        </script>

<body>
<h2>#########</h2>
<h2>Student Name</h2>

<ul>
    <li><strong><u>Hold</u></strong></li>
    <li><span id="stylediv">None</span></li> <!--change to default what the php page says-->
</ul>

<div>
    <form action="/action_page.php"></form>
    <label for="holdSelect">Add a hold:</label>
    <select id="holdSelect" onchange="styleselect()">
        <option value="1"></option>
        <option value="2">Academic</option>
        <option value="3">Finance </option>
        <option value="4">Health</option>
    </select>
    <input type="submit">
</div>


</body>
</div>
</html>
