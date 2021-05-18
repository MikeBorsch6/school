<!DOCTYPE html>
  <html>
  <head>
    <title>Master Schedule Spring 2021</title>
     <link rel="stylesheet" type="text/css" href="main.css">


    <header id = "main-header">

      <h1>Saturn University</h1>
        <h5>The Galaxy is the limit.</h5>

    </header>

    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/catalog">Catalog</a></li>
        <li><a href="/masterschedule">Master Schedule</a></li>
        <li><a href="/selectCal">Academic Calendar</a></li>s
        <li class="right"><a href="Login.blade.php">Log in</a></li>
    </ul>

</head>

  <style>
      @php
          echo(file_get_contents(public_path('css/main.css')))
      @endphp
  </style>

<body>

    <h1 class="title1">First Year Experience</h1>
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
        <td>16176</td>
        <td>1000</td>
        <td>231</td>
        <td>Ethics of Engagement			</td>
        <td>1</td>
        <td>MW	</td>
        <td>11:20 am-12:50 pm				</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
    <tr>
        <td>11782</td>
        <td>1000</td>
        <td>232</td>
        <td>Ethics of Engagement			</td>
        <td>2</td>
        <td>TR		</td>
        <td>09:40 am-11:10 am					</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
    <tr>
        <td>13830</td>
        <td>3000</td>
        <td>234</td>
        <td>Undergrad Teach Asst Seminar				</td>
        <td>1</td>
        <td>TBA	</td>
        <td>TBA				</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
    <tr>
        <td>11562</td>
        <td>3000</td>
        <td>233</td>
        <td>Undergrad Teach Asst Seminar			</td>
        <td>2</td>
        <td>TBA	</td>
        <td>TBA				</td>
        <td>1</td>
        <td>REMOTE</td>
    </tr>
</table>

</body>
</html>
