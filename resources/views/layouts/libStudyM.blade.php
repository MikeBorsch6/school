<!DOCTYPE html>
  <html>
  <head>
    <title>Master Schedule Fall 2021</title>
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
        <li class="right"><a href="Login.blade.php">Log in</a></li>
    </ul>

</head>

  <style>
      @php
          echo(file_get_contents(public_path('css/main.css')))
      @endphp
  </style>

<body>

    <h1 class="title1">Liberal Studies</h1>
<table class="tableMa">
    <tr>
        <th>CRN</th>
        <th>Course ID</th>
        <th>Faculty ID</th>
        <th>Course Name</th>
        <th>Section</th>
        <th>Day</th>
        <th>Time</th>
        <th>Building</th>
        <th>Room Number</th>
    </tr>
    <tr>
        <td>50653</td>
        <td>6300</td>
        <td>272</td>
        <td>Internship/Field Placement					</td>
        <td>1</td>
        <td>TBA	</td>
        <td>TBA				</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
    <tr>
        <td>54996</td>
        <td>7510</td>
        <td>273</td>
        <td>Thesis Research					</td>
        <td>1</td>
        <td>TBA	</td>
        <td>TBA				</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
</table>

</body>
</html>
