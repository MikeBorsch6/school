<!DOCTYPE html>
	<html>
	<head>
		<title>Semesters</title>
		 <link rel="stylesheet" type="text/css" href="main.css">


    <header id = "main-header">

      <h1>Saturn University</h1>
        <h5>The Galaxy is the limit.</h5>

    </header>

    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/catalog">Catalog</a></li>
        <li><a href="/masterschedule">Master Schedule</a></li>
        <li><a href="/selectCal">Academic Calendar</a></li>
        <li class="right"><a href="/login">Log in</a></li>
    </ul>



	</head>

    <style>
        @php
            echo(file_get_contents(public_path('css/main.css')))
        @endphp
    </style>

	<body>

		<h1 class="title1">Academic Calendar</h1>

        <div class="btn-group">
            <div class="center">
                <a href="selectCal/academicCFall21" class="button"><img src='images/academ.png'> Fall 2021</a>
                <a href="selectCal/academicCSpring21"class="button"><img src='images/academ.png'>Spring 2021</a>
            </div>
        </div>


	</body>
	</html>


