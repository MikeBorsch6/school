<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
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

<h1>Please select an option</h1>

<a href="/createCour" class="button"><img src='images/addCour.png'><p>Create Class</p></a>
<a href="/searchCour" class="button"><img src='images/editCour.png'><p>Edit Class</p></a>


</div>

</body>

</html>
