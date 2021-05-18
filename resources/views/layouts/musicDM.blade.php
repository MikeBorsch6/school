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

    <h1 class="title1">Music and Dance</h1>
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
        <td>52457</td>
        <td>1000</td>
        <td>332</td>
        <td>Music of Global Cultures I							</td>
        <td>1</td>
        <td>MW			</td>
        <td>09:40 am-11:10 am							</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
    <tr>
        <td>52388</td>
        <td>1110</td>
        <td>333</td>
        <td>Cultural Diverse Lang of Dance					</td>
        <td>1</td>
        <td>MW			</td>
        <td>11:20 am-12:50 pm								</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
    <tr>
        <td>50862</td>
        <td>2350</td>
        <td>334</td>
        <td>Acting						</td>
        <td>1</td>
        <td>TR				</td>
        <td>01:00 pm-02:30 pm								</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
    <tr>
        <td>53750</td>
        <td>3010</td>
        <td>335</td>
        <td>History of Jazz							</td>
        <td>1</td>
        <td>MW			</td>
        <td>11:20 am-12:50 pm								</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>

</table>

</body>
</html>
